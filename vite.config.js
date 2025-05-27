import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/js/welcome.css",
                "resources/css/login.css",
                "resources/css/register.css",
                "resources/css/dashboard.css",
                "resources/css/dashboard.js",
                "resources/css/chatboot.css",
                "resources/css/chatboot.js",
                "resources/css/detail-kamar.css",
                "resources/css/detail-kamar.js",
            ],
            refresh: true,
        }),
    ],
});
