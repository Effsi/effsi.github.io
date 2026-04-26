const CACHE_NAME = 'pgen-cache-v1'; // Change this only when you update the Generator

const ASSETS_TO_CACHE = [
  './',
  './pgen.html',
  './manifest-pgen.json',
  './icon-gen.png'
];

self.addEventListener('install', (event) => {
  self.skipWaiting();
  event.waitUntil(
    caches.open(CACHE_NAME).then((cache) => {
      // Fault-Tolerant Caching: If one file fails, it still successfully caches the rest!
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

self.addEventListener('fetch', (event) => {
  if (event.request.method !== 'GET') return;
  
  event.respondWith(
    caches.match(event.request).then((response) => {
      return response || fetch(event.request);
    }).catch(() => {
      console.error('Offline fetch failed.');
    })
  );
});