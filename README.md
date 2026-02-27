1. Apa kesulitan yang kamu temui pas konekin Laravel ke database?
    jawaban: Paling ribet pas urusan nama tabel. Laravel maunya nama tabel itu jamak (kayak siswas), padahal di database saya bikinnya tunggal (siswa). Jadi saya harus nambahin kode manual di Model supaya nggak error table not found. Terus harus teliti juga setting file .env biar nama database-nya pas sama yang di Laragon.
2. Apa bedanya bikin CRUD pakai Laravel sama PHP murni?
    jawaban:Laravel jauh lebih simpel karena nggak perlu ngetik query SQL manual yang panjang-panjang. Kodenya juga lebih rapi karena dipisah-pisah (ada bagian buat database, logika, dan tampilan), nggak numpuk jadi satu file kayak di PHP murni.
3. Gimana cara kamu jaga keamanan di aplikasi CRUD ini?
    jawaban: Saya pakai fitur bawaan Laravel, yaitu @csrf di setiap form supaya nggak gampang dibobol orang luar. Terus di bagian Controller, saya kasih validasi biar data yang diinput user harus sesuai (misalnya umur nggak boleh diisi huruf), jadi database tetep aman dari data sampah.
