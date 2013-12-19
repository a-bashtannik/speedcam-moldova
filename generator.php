<?php
/*
    Координаты в формате Navitel Speedcam без индекса
    X, Y, TYPE, SPEED, DirType, Direction и комментарий

    X - longditude decimal degrees
    Y - latitude decimal degrees
*/
$cams = array(
    [28.9255847556, 46.9420977684, 4, 50, 0, 45, 'mun. Chisinau, bd. Dacia'],
    [28.8819057324, 47.0394521316, 4, 50, 0, 45, 'mun. Chisinau, str. Alecu Russo'],
    [28.7617582744, 47.0441678394, 4, 50, 0, 45, 'mun. Chisinau, şos. Balcani'],
    [28.7804836602, 46.9867860336, 4, 50, 0, 45, 'mun. Chisinau, şos. Hînceşti '],
    [28.8590377985, 46.992813773, 4, 50, 0, 45, 'mun. Chisinau, bd. Decebal - str. Zelinski'],
    [28.8419634522, 47.0051535889, 4, 50, 0, 45, 'mun. Chisinau, bd. Dacia'],
    [28.8461354105, 46.9941974958, 4, 50, 0, 45, 'mun. Chisinau, bd. Dacia - str. Trandafirilor - str. Zelinski - str. Hristo Botev '],
    [28.8596815431, 47.003555417, 4, 50, 0, 45, 'mun. Chisinau, bd. Decebal'],
    [28.8459939116, 46.9932604313, 4, 50, 0, 45, 'mun. Chisinau, bd. Dacia - str. Hristo Botev - str. Trandafirilor'],
    [28.8525408793, 46.9896196207, 4, 50, 0, 45, 'mun. Chisinau, bd. Dacia'],
    [28.8548630888, 47.0619781773, 4, 50, 0, 45, 'mun. Chisinau, str. Studentilor - str. Calea Orheiului'],
    [28.8485891118, 47.04602971, 4, 50, 0, 45, 'mun. Chisinau, str. Calea Orheiului - str. Postei - str. Tudor Vladimirescu'],
    [28.8614219994, 47.0443642257, 4, 50, 0, 45, 'mun. Chisinau, str. Alecu Russo - str. Moscova - str. Bogdan Voievod'],
    [28.8977057233, 47.035880571, 4, 50, 0, 45, 'mun. Chisinau, str. Vadul lui Voda - str. str. Milescu Spătaru - str. Transnistria'],
    [28.8187414828, 47.0337170037, 4, 50, 0, 45, 'mun. Chisinau, bd. Stefan cel Mare si Sfant - str. Sciusev'],
    [28.8208129653, 47.0352970376, 4, 50, 0, 45, 'mun. Chisinau, str. Mihai Viteazul - str. Mitropolit Dosoftei'],
    [28.8038296075, 47.0217977988, 4, 50, 0, 45, 'mun. Chisinau, str. Vasile Lupu - str. Belinski - str. Alexandrescu'],
    [28.8161129251, 47.0246845205, 4, 50, 0, 45, 'mun. Chisinau, str. Vasile Lupu - str. Alexei Mateevici'],
    [28.8337773503, 47.0236668748, 4, 50, 0, 45, 'mun. Chisinau, bd. Stefan cel Mare si Sfant - str. A. Puskin'],
    [28.8310307682, 47.0255208165, 4, 50, 0, 45, 'mun. Chisinau, bd. Stefan cel Mare si Sfant - str. Banulescu Bodoni'],
    [28.8251889026, 47.0294273268, 4, 50, 0, 45, 'mun. Chisinau, bd. Stefan cel Mare si Sfant - str. Serghei Lazo'],
    [28.845542108, 47.0157870872, 4, 50, 0, 45, 'mun. Chisinau, str. Ismail - bd. Ştefan cel Mare'],
    [28.848202256, 47.0141105408, 4, 50, 0, 45, 'mun. Chisinau, bd. St.cel Mare - bd.C.Negruzzi - str. Ciuflea'],
    [28.8550135223, 47.0136520985, 4, 50, 0, 45, 'mun. Chisinau, bd. C.Negruzzi - str. D.Cantemir - bd. Iu.Gagarin'],
    [28.8573855721, 46.9861636349, 4, 50, 0, 45, 'mun. Chisinau, bd. Dacia - bd. Traian - bd. Decebal'],
    [28.8619276279, 46.9829081449, 4, 50, 0, 45, 'mun. Chisinau, bd. Dacia - bd. Cuza- Vada'],
    [28.8679379643, 46.9786179805, 4, 50, 0, 45, 'mun. Chisinau, bd. Dacia - str. Independentei - str. Burebista'],
    [28.8733500802, 46.975231218, 4, 50, 0, 45, 'mun. Chisinau, bd. Dacia - str. Valea Crucii - str. Gradina Botanica'],
    [28.8551088148, 46.9783680806, 4, 50, 0, 45, 'mun. Chisinau, bd. Cuza-Voda - str. Independentei'],
    [28.8193423048, 46.9921157566, 4, 50, 0, 45, 'mun. Chisinau, str. Miorita - str. Grenoble'],
    [28.798272056, 46.9948508165, 4, 50, 0, 45, 'mun. Chisinau, şos. Hînceşti'],
    [28.8280982059, 47.0137858172, 4, 50, 0, 45, 'mun. Chisinau, str. V.Alecsandri - str. A.Mateevici'],
    [28.833798147, 47.0177944599, 4, 50, 0, 45, 'mun. Chisinau, str. Bucuresti - str. V.Alecsandri'],
    [28.8412088723, 47.0127486791, 4, 50, 0, 45, 'mun. Chisinau, str. Bucuresti - str. Ismail'],
    [28.8433093392, 47.0113348706, 4, 50, 0, 45, 'mun. Chisinau, str. Bucuresti - str. Ciuflea'],
    [28.8295776144, 47.0205806461, 4, 50, 0, 45, 'mun. Chisinau, str. Bucuresti - str. A. Puskin'],
    [28.8266581569, 47.022592595, 4, 50, 0, 45, 'mun. Chisinau, str. Bucuresti - str. Mitropolit Bănulescu-Bodoni'],
    [28.8237458742, 47.0245347191, 4, 50, 0, 45, 'mun. Chisinau, str. Bucuresti - str. Maria Cebotari'],
    [28.8237023626, 47.0205665913, 4, 50, 0, 45, 'mun. Chisinau, str. Banulescu Bodoni - str. M. Kogalniceanu'],
    [28.8281353357, 47.0274711549, 4, 50, 0, 45, 'mun. Chisinau, bd. Stefan cel Mare si Sfant - str. Maria Cebotari'],
    [28.8415951104, 46.9805403318, 4, 50, 0, 45, 'mun. Chisinau, str. Grenoble'],
);

echo "IDX,X,Y,TYPE,SPEED,DirType,Direction\n";

foreach($cams as $idx => $camera)
    echo "$idx,{$camera[0]},{$camera[1]},{$camera[2]},{$camera[3]},{$camera[4]},{$camera[5]} // {$camera[6]}\n";
