<?php include "header.php";
$id = '';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}
echo $twig->render('portofolio.twig', [
    'gets' => [
    [
      'id' => $id
    ]
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
      'tag' => [
        ['class'=>'button is-rounded is-danger','label' => 'HTML'],
        ['class'=>'button is-rounded is-primary','label' => 'CSS'],
        ['class'=>'button is-rounded is-link','label' => 'JavaScript'],
        ['class'=>'button is-rounded is-info','label' => 'Boostrap'],
      ],
      'class'=>[
        ' is-danger',
        ' is-primary',
        ' is-link',
        ' is-info',
      ],
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
      'class'=>[
        ' is-danger',
        ' is-primary',
        ' is-link',
        ' is-info',
      ],
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
      
      'class'=>[
        ' is-danger',
        ' is-primary',
        ' is-link',
        ' is-info',
      ],
      'label' => [
        'HTML',
        'CSS',
        'Javacript',
        'PHP',
       ],
    ],
  ],
]);