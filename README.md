
installasi:
- Buka file pada Text Editor
- Buka Terminal
- copas file .env.example ke directory yang sama /root directory dan rename menjadi .env
- edit pada file .env bagian database name: sekolah
- buat database kosong di localhost/phpmyadmin dengan nama: sekolah
- Ketikkan perintah: composer update
- Ketikkan perintah: php artisan key:generate
- Ketikkan perintah: php artisan migrate:fresh --seed
- Ketikkan perintah: php artisan serve
- npm install dan npm run dev
