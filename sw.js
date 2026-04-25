const CACHE_NAME = 'effsi-pass-v1';
const ASSETS_TO_CACHE = [
  './',
  './pgen.html',
  './manifest.json',
  './ss.css' // Include this if your generator uses the external CSS file
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