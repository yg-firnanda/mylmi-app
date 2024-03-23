## Tabel ERD

# Update Skema Database User & Fundraising
![LMI App (1)](https://github.com/yg-firnanda/mylmi-app/assets/82860149/c6e24979-cb00-4503-911f-861aa468b916)

## User:
Perubahan field is_admin menjadi role tipe enum, dengan value berikut:

### [user]:
- role default ketika user mendaftarkan diri di aplikasi (default value)
### [writer]
- bisa akses dashboard khusus halaman posts saja
- TIDAK bisa akses halaman list user di dashboard
- bisa menambahkan / memodifikasi postingan
### [editor]
- bisa akses dashboard khusus halaman magazine saja
- TIDAK bisa akses halaman list user di dashboard
- bisa menambahkan / memodifikasi magazine.
### [admin]:
- akses lebih luas daripada writer / editor
- bisa akses dashboard
- bisa akses halaman list user di dashboard
- bisa menambahkan writer / editor baru
### [superadmin]:
- Cakupan akses paling luas, bisa akses dahsboard, bisa menambahkan admin baru

admin / superadmin juga bisa menambahkan / memodifikasi post dan majalah

## Fundraising
Perubahan field is_urgent menjadi type dengan data enum, dengan value berikut:
### [standard]:
- Ya penggalangan dana normal seperti pada umumya (default value)
### [urgent]:
- Untuk galangan dana mendesak, misal orang minta bantuan untuk biaya pengobatan orang tua yang sedang kritis
### [highlight]:
- Untuk galangan dana yang lagi viral, misal gempa palu donggala di masa lalu / bantuan palestina.

Kemudian ada tambahan field baru yakni **submission_status**, sehingga kedepannya tidak hanya dari pihak admin yang bisa menambahkan fundraising melainkan user juga bisa melakukan hal yang sama, dengan beberapa persyaratan administrasi, tapi untuk yag bagian pengajuan penggalangan dana dan menyertakan dokumen administrasi masih belum tau skemanya seperti apa mungkin ada yang tau? dan mungkin kedepannya untuk skema tabel akan diupdate lagi

Oh iya ini yang di tabel user tak tambah field baru date_birth, yang dimana nanti kegunaannya buat filter user, jadi untuk user yang usia > 30 tahun mendapat lebih banyak notifikasi untuk donasi, karena rata-rata ekonomi sudah stabil, sehingga diharapkan lebih rajin donasi.
