<?php 
include "header.php";

echo $twig->render('index.twig', [

    'banner'  => 'assets/img/head.jpg',
    'profile' => 'assets/img/me.jpg',
    'sosmed'  => 'assets/img/bio.jpg',
    'nama'    => 'Fakhri Alauddin',
    'ttl'     => 'Jombang, 31  Maret 2001',
    'umur'    => '18 Tahun ',
    'alamat'  => 'Jl.Raya Benowo No 06',
    'hobi'    => 'Coding dan Editing',
    
    'skills' => [ 
        [ 
            'skill' => 'C++',
            'color' => 'is-success',
            'persen' => '60',
            'tampil' => '60%',
            'img' => 'assets\img\CPP.png',
            'deskripsi' => 'Menguasai berbagai macam operasi seperti arimatika ',
            
            
        ],
        [
            'skill' => 'HTML',
            'color' => 'is-warning',
            'persen' => '40',
            'tampil' => '40%',
            'img' => 'assets\img\HTML.png',
            'deskripsi' => 'Menguasai berbagai macam tag pada HTML',
            
        ],
        [
            'skill' => 'CSS',
            'color' => 'is-warning',
            'persen' => '40',
            'tampil' => '40%',
            'img' => 'assets\img\CSS.png',
            'deskripsi' => 'Menguasai berbagai style yang ada di CSS',
        ],
        [
            'skill' => 'JAVA',
            'color' => 'is-primary',
            'persen' => '55',
            'tampil' => '55%',
            'img' => 'assets\img\JAVA.png',
            'deskripsi' => 'Menguasai OOP yang ada dalam JAVA',
        ],
        [
            'skill' => 'PHP',
            'color' => 'is-warning',
            'persen' => '45',
            'tampil' => '45%',
            'img' => 'assets\img\PHP.png',
            'deskripsi' => 'Menguasai method POST dan GET dalam PHP',
        ],
        [
            'skill' => 'BULMA',
            'color' => 'is-primary',
            'persen' => '50',
            'tampil' => '50%',
            'img' => 'assets\img\BUL.png',
            'deskripsi' => 'Mampu memahami class-class Framework Bulma',    
        ],
    ],

    'education' => [ 
        [ 
            'year' => '2009 - 2015',
            'deggre' => 'Siswa',
            'scholl' => 'SDN Benowo 1',
            'location' => 'Jl Raya Benowo No 71, Pakal, Surabaya',
            'imsch' => 'assets\img\Benowo.jpg',
        ],
        [
            'year' => '2015 - 2018',
            'deggre' => 'Siswa',
            'scholl' => 'SMPN 14 Surabaya',
            'location' => 'Jl. Jurang Kuping, Pakal, Surabaya',            
            'imsch' => 'assets\img\smp14.jpg',
        ],
        [
            'year' => '2018 - Sekarang',
            'deggre' => 'Siswa',
            'scholl' => 'SMKN 2  Surabaya',
            'location' => 'Jl. Tentara Genie Pelajar No.26, Sawahan, Surabaya',         
            'imsch' => 'assets\img\smk2.jpg',
        ],
    ],
    'portfolio' => [ 
        [
          'judul' => 'Web Profil',
          'sub' => 'Pembuatan Web dengan Framework Boostrap',
          'galeri'=> 'porto',
          'imgweb' => [
            'assets\img\image.jpg',
            'assets\img\img2.jpg',
            'assets\img\img3.jpg',
          ],
      'capt' => [
            'Tampilan Awal',
            'Tampilan Galeri',
            'Tampilan contact',
          ],
      'komplit' => 'Completed : 16 March 2019',
      'id' => '0',
      'label' => [
        'HTML',
        'CSS',
        'Javacript',
        'Boostrap',
      ],
    ],
    [
      'judul' => 'Edit Foto',
      'sub' => 'Editing Foto Menggunakan Aplikasi Editing (Pixellab, Picsart, PS Touch)',
      'galeri'=> 'edit',
      'imgweb' => [
        'assets\img\rpl.jpg',
        'assets\img\bio.jpg',
        'assets\img\light.jpg',
      ],
      'capt' => [
        'Pembuatan desain sticker',
        'Hasil edit desain kelas RPL',
        'Hasil edit Lightroom CC',
      ],
      'komplit' => 'Completed : 26 November 2019',
      'id' => '1',
      'label' => [
        'Llightroom',
        'Pixellab',
        'Photoshop',
        'PsTouch',
      ],
    ],
    [
      'judul' => 'Web Commpany ',
      'sub' => ' Pembuatan Web Company Dari Tugas guru',
      'galeri'=> 'comp',
      'imgweb' => [
        'assets\img\host.jpg',
        'assets\img\host2.jpg',
        'assets\img\host3.jpg'
      ],
      'capt' => [
        'Tampilan Header',
        'Tampilan team dan testimoni',
        'Tampilan Contact',
      ],
      'komplit' => 'Completed : 12 September 2019',
      'id' => '2', 
      'label' => [
        'HTML',
        'CSS',
        'Javacript',
        'PHP',
      ],
    ],
  ],
  
]);