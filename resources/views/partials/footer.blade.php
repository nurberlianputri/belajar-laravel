<footer class="bg-slate-900 text-slate-300 mt-20">
    <div class="max-w-6xl mx-auto px-6 py-10 grid gap-8 md:grid-cols-3">
        <div>
            <h3 class="text-lg font-bold text-white mb-2">LaraBelajar</h3>
            <p class="text-sm text-slate-400">Latihan layouting template Blade pada Laravel.</p>
        </div>
        <div>
            <h4 class="font-semibold text-white mb-2">Menu</h4>
            <ul class="space-y-1 text-sm">
                <li><a href="/" class="hover:text-white">Beranda</a></li>
                <li><a href="/profile" class="hover:text-white">Profil</a></li>
                <li><a href="/contact" class="hover:text-white">Kontak</a></li>
            </ul>
        </div>
        <div>
            <h4 class="font-semibold text-white mb-2">Teknologi</h4>
            <p class="text-sm text-slate-400">Laravel, Blade, dan Tailwind CSS.</p>
        </div>
    </div>
    <div class="border-t border-slate-800 py-4 text-center text-xs text-slate-500">
        &copy; {{ date('Y') }} LaraBelajar. Dibuat dengan Laravel.
    </div>
</footer>