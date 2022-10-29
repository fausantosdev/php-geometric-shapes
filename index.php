<?php
    // Mine type
    header('Content-type: image/png');

    // Tamanho da imagem
    const WIDTH = 800;
    const HEIGHT = 600;

    // Centro dos eixos
    const CENTER_X = WIDTH / 2;
    define('CENTER_Y', floor(HEIGHT / 2));

    // Buffer de imagem
    // imagecreatetruecolor retorna um identificador de imagem representando uma imagem preta de tamanho x por y.
    $img = imagecreatetruecolor(WIDTH, HEIGHT);

    // Cores
    // imagecolorallocate retorna um identificador de cor que representa a cor composta pelos componentes RGB fornecidos.
    $backgroundColor = imagecolorallocate($img, 255,255,255);

    // Executa um preenchimento de coloração começando na coordenada fornecida (o canto superior esquerdo é 0, 0).
    imagefill($img,0, 0, $backgroundColor);

    // Impressão da imagem
    imagepng($img);
