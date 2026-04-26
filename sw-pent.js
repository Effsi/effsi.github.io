const CACHE_NAME = 'pent-cache-v1'; // Change this only when you update the Analyzer

const ASSETS_TO_CACHE = [
  './',
  './pent.html',
  './manifest-pent.json',
  './icon-ent.png'
];

self.addEventListener('install', (event) => {
  self.skipWaiting();
  event.waitUntil(
    caches.open(CACHE_NAME).then((cache) => {
      return Promise.all(
        ASSETS_TO_CACHE.map(asset => {
          return cache.add(asset).catch(error => {
            console.error('Failed to cache:', asset, error);
          });
        })
      );
    })
  );
});

self.addEventListener('activate', (event) => {
  event.waitUntil(
    caches.keys().then((cacheNames) => {
      return Promise.all(
        cacheNames.map((cacheName) => {
          if (cacheName.startsWith('pgen-') && cacheName !== CACHE_NAME) {
            return caches.delete(cacheName);
          }
        })
      );
    }).then(() => self.clients.claim())
  );
});

// The Upgraded Network-First Engine
self.addEventListener('fetch', (event) => {
  if (event.request.method !== 'GET') return;

  event.respondWith(
    fetch(event.request)
      .then((networkResponse) => {
        // 1. If the internet works, save a fresh copy and show the page!
        return caches.open(CACHE_NAME).then((cache) => {
          cache.put(event.request, networkResponse.clone());
          return networkResponse;
        });
      })
      .catch(() => {
        // 2. If the internet fails (or Android adds weird query strings), use the cache!
        // ignoreSearch: true is the magic bullet that stops the ERR_FAILED crash.
        return caches.match(event.request, { ignoreSearch: true });
      })
  );
});