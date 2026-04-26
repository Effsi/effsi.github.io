const CACHE_NAME = 'effsi-tools-v2';
const ASSETS_TO_CACHE = [
  './',
  './pgen.html',
  './pent.html',
  './manifest-pgen.json',
  './manifest-pent.json'
];

// Install the service worker and cache the necessary files
self.addEventListener('install', (event) => {
  event.waitUntil(
    caches.open(CACHE_NAME).then((cache) => {
      return cache.addAll(ASSETS_TO_CACHE);
    })
  );
});

// Serve cached files when offline
self.addEventListener('fetch', (event) => {
  event.respondWith(
    caches.match(event.request).then((response) => {
      return response || fetch(event.request);
    })
  );
});