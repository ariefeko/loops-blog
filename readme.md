# Simple Blogs

## Instalasi Website
1. Create mysql database
2. Run "composer install"
3. Run "php artisan migrate" untuk create table
4. Run "php artisan db:seed" untuk seeding table dengan data relasinya 

## Penjelasan
Sistem ini menerapkan konsep blog yang secara keseluruhan terbagi menjadi 2 halaman utama (guest dan registered page), dalam registered page terdapat CRUD untuk Post dan Comment. Pada setiap table list sudah mendukung datatable untuk kecepatan dan interaktifitas list, serta dalam setiap query sudah diterapkan eager loading untuk meningkatkan kecepatan load data di frontend/views.

Sedangkan di User page untuk list saja, registered page sudah di relasikan satu sama lain sehingga user dapat dengan mudah mendapatkan informasi di setiap data. Penerapan Eloquent query, observer sebagian berada di halaman ini, untuk generating slug sudah disediakan 2 alternatif yang pertama menggunakan observer pada saat creating dan updating post, dan yang kedua menggunakan jquery script pada saat user mengetik title di form create/edit post.

Pada guest page, terdapat halaman home yang berisi list semua artikel atau post, di setiap artikel detail user / guest dapat memberi komentar pada post tersebut, registered user dan guest user dapat memberikan komentar pada setiap post.

## Kekurangan
- Fitur: kurangnya fitur seperti star sistem, comment approval, user authorization, Oauth login & registration, post type (pending, draft, dst), user gravatar, dll.
- Performa: Website ini memiliki performa lancar dalam menghandle data dibawah 100.000 rows, dikarenakan belum menerapkan konsep mysql function dan procedure dalam pengelohan data.
- Kualitas Kode:`Kode yang digunakan dalam pembuatan website ini mengikuti standard dari Laravel yaitu PSR-4.
