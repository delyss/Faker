<?php

namespace Faker\Provider\ja_JP;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{lastName}} {{firstNameMale}}',
    );

    protected static $femaleNameFormats = array(
        '{{lastName}} {{firstNameFemale}}',
    );

    /**
     * {@link} http://dic.nicovideo.jp/a/%E6%97%A5%E6%9C%AC%E4%BA%BA%E3%81%AE%E5%90%8D%E5%89%8D%E4%B8%80%E8%A6%A7
     * {@link} http://www.meijiyasuda.co.jp/enjoy/ranking/
     */
//    protected static $firstNameMale = array(
//        '晃', '篤司', '治', '和也', '京助', '健一', '修平', '翔太', '淳', '聡太郎', '太一', '太郎', '拓真', '翼', '智也',
//        '直樹', '直人', '英樹', '浩', '学', '充', '稔', '裕樹', '裕太', '康弘', '陽一', '洋介', '亮介', '涼平', '零',
//    );
    protected static $firstNameMale = array(
        'Akifumi', 'Akihiko', 'Akihiro', 'Akihisa', 'Akihito ', 'Akimasa', 'Akimitsu', 'Akinobu', 'Akinori', 'Akio',
        'Akisada', 'Akishige', 'Akito', 'Akitoshi', 'Akitsugu', 'Akiyoshi', 'Akiyuki', 'Arata ', 'Arihiro', 'Arinaga',
        'Arinobu', 'Aritomo', 'Asao', 'Asuka ', 'Atomu', 'Atsuhiko', 'Atsuhiro', 'Atsuo', 'Atsushi', 'Atsuto',
        'Atsuya', 'Azuma ', 'Banri', 'Bunji ', 'Bunta', 'Chikara ', 'Chikashi', 'Chikayoshi', 'Chōei', 'Choki',
        'Chūichi', 'Dai ', 'Daichi ', 'Daigo ', 'Daiki', 'Dairoku', 'Daishin', 'Daisuke', 'Daizō', 'Eiichi',
        'Eiichiro', 'Eiji', 'Eijirō ', 'Eikichi', 'Einosuke', 'Eishun', 'Eisuke', 'Eita ', 'Eizō', 'Etsuji',
        'Fujio', 'Fumiaki', 'Fumihiko', 'Fumihiro', 'Fumio', 'Fumito', 'Fumiya', 'Fusanosuke', 'Fusazane', 'Futoshi',
        'Fuyuki', 'Gaku', 'Gakuto', 'Genjiro', 'Genta', 'Gentarō', 'Genzo', 'Giichi', 'Gin ', 'Goichi',
        'Goro', 'Hachirō', 'Hakaru', 'Haruaki', 'Haruchika ', 'Haruhiko', 'Haruhiro', 'Haruhisa', 'Haruki', 'Harunobu',
        'Haruo', 'Harutaka', 'Haruto', 'Haruyoshi', 'Hatsuo', 'Hayanari', 'Hayata', 'Hayato ', 'Heihachirō', 'Heisuke',
        'Hideaki', 'Hideharu', 'Hidehiko', 'Hidehito', 'Hideji', 'Hidekazu', 'Hideki', 'Hidemasa', 'Hidemi', 'Hidemitsu',
        'Hidenobu', 'Hidenori', 'Hideo', 'Hideshi', 'Hidetaka', 'Hideto', 'Hidetoshi', 'Hidetsugu', 'Hideyo', 'Hideyoshi ',
        'Hideyuki', 'Hiro ', 'Hiroaki', 'Hirofumi', 'Hirohide', 'Hirohisa', 'Hiroji', 'Hirokatsu', 'Hirokazu', 'Hiroki',
        'Hirokuni', 'Hiromasa', 'Hiromichi', 'Hiromitsu', 'Hiromori', 'Hironari', 'Hironobu', 'Hironori', 'Hirosada', 'Hiroshi',
        'Hiroshige ', 'Hirotaka', 'Hirotami', 'Hiroto', 'Hirotoki', 'Hirotomo', 'Hirotoshi', 'Hirotsugu', 'Hiroya', 'Hiroyasu',
        'Hiroyoshi', 'Hiroyuki', 'Hisahito', 'Hisamitsu', 'Hisamoto', 'Hisanobu', 'Hisanori', 'Hisao', 'Hisashi', 'Hisataka',
        'Hisateru', 'Hisato', 'Hisatsugu', 'Hisaya', 'Hisayasu', 'Hisayoshi', 'Hisayuki', 'Hitoshi', 'Hokuto', 'Hozumi',
        'Ichiei', 'Ichirō', 'Ichizō', 'Iehisa', 'Iemasa', 'Iemon', 'Iesada', 'Ikki ', 'Ikko', 'Ikuo',
        'Ikurō', 'Ippei', 'Isami', 'Isamu', 'Isao', 'Issei ', 'Itaru', 'Iwao', 'Jiichirō', 'Jin',
        'Jinpachi', 'Jiro ', 'Jōichirō', 'Joji', 'Jōkichi', 'Jōtarō', 'Jūbei', 'Jūkichi', 'Junichi', 'Junji',
        'Junki', 'Junpei', 'Junzō', 'Jūshirō', 'Jūtarō', 'Jūzō', 'Kagemori', 'Kagenori', 'Kagetaka', 'Kaichi',
        'Kaii', 'Kaiji', 'Kaito', 'Kakichi', 'Kaku ', 'Kakuji', 'Kanehira', 'Kanehiro', 'Kanematsu', 'Kanemoto',
        'Kanesuke', 'Kanetake', 'Kaneto', 'Kanetsugu', 'Kaneyoshi', 'Kankuro', 'Kansuke', 'Kanta ', 'Katsuaki', 'Katsuhiko',
        'Katsuhiro', 'Katsuhisa', 'Katsuhito', 'Katsuji', 'Katsuki', 'Katsukiyo', 'Katsumasa', 'Katsumoto', 'Katsunaga', 'Katsunari',
        'Katsunori', 'Katsunosuke', 'Katsuo', 'Katsushi', 'Katsusuke', 'Katsutarō', 'Katsuteru', 'Katsutomo', 'Katsutoshi', 'Katsuya',
        'Katsuyoshi', 'Katsuyuki', 'Kazuaki', 'Kazuharu', 'Kazuhiko', 'Kazuhiro', 'Kazuhisa', 'Kazuhito', 'Kazuki', 'Kazuma',
        'Kazumasa', 'Kazunari', 'Kazunori', 'Kazuo', 'Kazuoki', 'Kazurō', 'Kazushi', 'Kazushige', 'Kazutaka', 'Kazuto',
        'Kazutoki', 'Kazutoshi', 'Kazuya', 'Kazuyoshi', 'Kazuyuki', 'Keigo ', 'Keiichi', 'Keiichirō', 'Keiji', 'Keijirō',
        'Keijū', 'Keiki ', 'Keinosuke', 'Keishi', 'Keisuke', 'Keita ', 'Keizō', 'Ken ', 'Kengo ', 'Kenji ',
        'Kenjirō', 'Kenki', 'Kenkichi', 'Kensaku', 'Kenshin', 'Kensuke', 'Kenta', 'Kentaro', 'Kento', 'Kenzo',
        'Kesao', 'Kihachi', 'Kihachirō', 'Kihei', 'Kiichirō', 'Kikuo', 'Kimio', 'Kimiya', 'Kinji', 'Kinjirō',
        'Kintaro', 'Kisaburō', 'Kishō', 'Kiyoaki', 'Kiyofumi', 'Kiyohide', 'Kiyohiko', 'Kiyohiro', 'Kiyoji', 'Kiyokazu',
        'Kiyomoto', 'Kiyonari', 'Kiyonori', 'Kiyoshi', 'Kiyosue', 'Kiyotaka', 'Kiyotake', 'Kiyoyuki', 'Kogorō', 'Kōhei ',
        'Kōichi', 'Kōichirō', 'Koji', 'Kojiro', 'Kōki ', 'Kōkichi', 'Kōnosuke', 'Kōsaku', 'Kōsei', 'Kōshirō',
        'Koson', 'Kōsuke', 'Kotaro', 'Kouta', 'Kōzō', 'Koya ', 'Kumatarō', 'Kuniaki', 'Kunihiko', 'Kunihiro',
        'Kunihisa', 'Kunimasa', 'Kunimitsu', 'Kunio', 'Kunitake', 'Kuniyuki', 'Kuranosuke', 'Kusuo', 'Kyōhei', 'Kyōichi',
        'Kyōji', 'Kyōsuke', 'Kyukichi', 'Mahiro', 'Makio', 'Mamoru', 'Manabu', 'Manjirō', 'Mantarō', 'Mareo ',
        'Masaaki', 'Masabumi', 'Masachika', 'Masafumi', 'Masaharu', 'Masahide', 'Masahiko', 'Masahiro', 'Masahisa', 'Masahito',
        'Masaichi', 'Masaie', 'Masaji', 'Masakage', 'Masakatsu', 'Masakazu', 'Masakuni', 'Masamichi', 'Masamitsu', 'Masamori',
        'Masamune ', 'Masamura', 'Masanao', 'Masanobu', 'Masanori', 'Masao', 'Masaomi', 'Masaru', 'Masashi', 'Masashige',
        'Masataka', 'Masatake', 'Masatane', 'Masateru', 'Masato', 'Masatomo', 'Masatoshi', 'Masatsugu', 'Masaya ', 'Masayoshi',
        'Masayuki', 'Masazumi', 'Masuo', 'Masuzō', 'Matabei', 'Matsuchi', 'Matsuki', 'Matsuo ', 'Matsushige', 'Michiaki',
        'Michiharu', 'Michihiko', 'Michihiro', 'Michihisa', 'Michinori', 'Michio', 'Michirō', 'Michitaka', 'Michitarō', 'Michiya',
        'Michiyoshi', 'Mikio', 'Mikuni', 'Mineichi', 'Mineo ', 'Mitsuaki', 'Mitsugi', 'Mitsugu', 'Mitsuharu', 'Mitsuhide',
        'Mitsuhiko', 'Mitsuhira', 'Mitsuhiro', 'Mitsuhisa', 'Mitsumasa', 'Mitsumori', 'Mitsunobu', 'Mitsunori', 'Mitsuo', 'Mitsuomi',
        'Mitsusuke', 'Mitsutaka', 'Mitsuteru', 'Mitsutoshi', 'Mitsuyasu', 'Mitsuyo', 'Mitsuyoshi', 'Mitsuyuki', 'Mochiaki', 'Mokichi',
        'Morihiko', 'Morihiro', 'Morikazu', 'Morimasa', 'Morio', 'Moritaka', 'Mosuke', 'Motoaki', 'Motoharu', 'Motohiko',
        'Motohiro', 'Motoichi', 'Motojirō', 'Motoki', 'Motomu', 'Motonobu', 'Motoshi', 'Motoshige', 'Motosuke', 'Mototada',
        'Mototsugu', 'Motoyasu', 'Motoyuki', 'Motozane', 'Mukuro', 'Munehiro', 'Munemori', 'Munenobu', 'Munenori', 'Muneo',
        'Muneshige', 'Munetaka', 'Munetoki', 'Munetoshi', 'Murashige', 'Mutsuo', 'Nagaharu', 'Nagahide', 'Nagamasa', 'Nagamichi',
        'Naganao', 'Naganori', 'Nagatoki', 'Nagatomo', 'Namio', 'Nankichi', 'Naofumi', 'Naohiko', 'Naohiro', 'Naohisa',
        'Naohito', 'Naoji', 'Naokatsu', 'Naoki', 'Naomasa', 'Naomichi', 'Naomori', 'Naoshi', 'Naotaka', 'Naotake',
        'Naoto', 'Naoya', 'Naoyuki', 'Naozumi', 'Nariaki', 'Nariakira', 'Naritaka', 'Nariyasu', 'Nariyuki', 'Naruhisa',
        'Naruhito', 'Noboru', 'Nobuaki', 'Nobuatsu', 'Nobuharu', 'Nobuhiko', 'Nobuhiro', 'Nobuhisa', 'Nobuhito', 'Nobukatsu',
        'Nobukazu', 'Nobumasa', 'Nobumitsu', 'Nobumoto', 'Nobunao', 'Nobunari', 'Nobuo', 'Nobusada', 'Nobusuke', 'Nobutaka',
        'Nobuteru', 'Nobutoki', 'Nobutomo', 'Nobutoshi', 'Nobutsuna', 'Nobuyasu', 'Nobuyoshi', 'Nobuyuki', 'Noriaki', 'Norifumi',
        'Norifusa', 'Norihiko', 'Norihiro', 'Norihito', 'Norikazu', 'Norimasa', 'Norio', 'Noriyasu', 'Noriyoshi', 'Noriyuki',
        'Nozomu', 'Okimoto', 'Okitsugu', 'Osamu', 'Otohiko', 'Raizo', 'Reiichi', 'Reiji', 'Reizō', 'Rentarō',
        'Riichi', 'Rikichi', 'Rikiya', 'Rinshō', 'Ritsuo', 'Rokurō', 'Ryōhei', 'Ryōichi', 'Ryōji', 'Ryōma',
        'Ryōsei', 'Ryōsuke', 'Ryōta', 'Ryōtarō', 'Ryōzō', 'Ryu', 'Ryūhei', 'Ryūichi', 'Ryūji', 'Ryūki',
        'Ryūnosuke', 'Ryūsaku', 'Ryūsei ', 'Ryūsuke', 'Ryūta', 'Ryūtarō', 'Ryūya', 'Ryūzō', 'Saburō', 'Sachio',
        'Sadaaki', 'Sadaharu', 'Sadahiko', 'Sadao', 'Sadatoshi', 'Sadayoshi', 'Sadazane', 'Saiichi', 'Sakichi', 'Sanji ',
        'Satonari', 'Satoru', 'Satoshi', 'Satsuo', 'Seigen', 'Seigo', 'Seihō', 'Seiichi', 'Seiichirō', 'Seiji',
        'Seijin', 'Seijirō', 'Seiki ', 'Seikichi', 'Seishi', 'Seishirō', 'Seiya', 'Seizō', 'Senkichi', 'Shichirō',
        'Shigeaki', 'Shigefumi', 'Shigeharu', 'Shigehiro', 'Shigehisa', 'Shigekazu', 'Shigeki', 'Shigemasa', 'Shigematsu', 'Shigemi',
        'Shigemitsu', 'Shigenaga', 'Shigenobu', 'Shigenori', 'Shigeo', 'Shigeru', 'Shigetada', 'Shigetaka', 'Shigeto', 'Shigetoshi',
        'Shigeyasu', 'Shigeyoshi', 'Shigeyuki', 'Shikō', 'Shin ', 'Shingo ', 'Shinji', 'Shinjirō', 'Shinjō ', 'Shinkichi',
        'Shinpei', 'Shinsaku', 'Shinsuke', 'Shinta', 'Shintarō', 'Shinya', 'Shinzō', 'Shiryu ', 'Shizuo', 'Shō ',
        'Shōgo', 'Shōhei ', 'Shōichi', 'Shōji ', 'Shōjirō', 'Shōma', 'Shōsuke', 'Shōta', 'Shōtarō', 'Shōya',
        'Shōzō', 'Shūgo', 'Shūhei', 'Shūichi', 'Shūji', 'Shuko', 'Shun ', 'Shunji', 'Shunkichi', 'Shunnosuke',
        'Shunpei', 'Shunsaku', 'Shunsuke', 'Shuntarō', 'Shunzō', 'Shūsaku', 'Shūsuke', 'Shūta', 'Shūzō', 'Sōgen',
        'Sōichi', 'Sōichirō', 'Sōji', 'Sonosuke', 'Sōsuke', 'Sōtarō', 'Suehiro', 'Suguru', 'Sukehiro', 'Sukemasa',
        'Suketoshi', 'Suketsugu', 'Sumio', 'Sumiyoshi ', 'Sunao', 'Susumu', 'Tadaaki', 'Tadachika', 'Tadafumi', 'Tadaharu',
        'Tadahiko', 'Tadahiro', 'Tadahito', 'Tadakatsu', 'Tadamasa', 'Tadami', 'Tadamori', 'Tadanaga', 'Tadanao', 'Tadanari',
        'Tadanobu', 'Tadanori', 'Tadao', 'Tadaoki', 'Tadashi', 'Tadataka', 'Tadateru', 'Tadatomo', 'Tadatoshi', 'Tadatsugu',
        'Tadatsune', 'Tadayo', 'Tadayoshi', 'Tadayuki', 'Taichi ', 'Taichirō', 'Taiga ', 'Taiichi', 'Taiji ', 'Taiki',
        'Taishi ', 'Taisuke', 'Taizō', 'Taka ', 'Takaaki', 'Takafumi', 'Takahide', 'Takahiko', 'Takahiro', 'Takahisa',
        'Takahito', 'Takaki', 'Takamasa', 'Takamitsu', 'Takamori', 'Takanobu', 'Takanori', 'Takao ', 'Takashi', 'Takatō',
        'Takatomi', 'Takatoshi', 'Takatsugu', 'Takauji', 'Takaya ', 'Takayasu', 'Takayoshi', 'Takayuki', 'Takeaki', 'Takefumi',
        'Takeharu', 'Takehiko', 'Takehiro', 'Takehisa', 'Takehito', 'Takeichi', 'Takejirō', 'Takenaga', 'Takenori', 'Takeo',
        'Takero', 'Takeru', 'Takeshi', 'Taketo', 'Taketora', 'Taketoshi', 'Takeya', 'Takeyoshi', 'Takezō', 'Taku',
        'Takuji', 'Takuma', 'Takumi', 'Takuo', 'Takurō', 'Takuto', 'Takuya', 'Takuzō', 'Tamio', 'Tamotsu',
        'Tarō ', 'Tateo', 'Tatsuaki', 'Tatsuhiko', 'Tatsuhiro', 'Tatsuhito', 'Tatsuji', 'Tatsuma', 'Tatsumi', 'Tatsunori',
        'Tatsuo', 'Tatsurō', 'Tatsushi', 'Tatsuya', 'Tatsuyoshi', 'Tatsuyuki', 'Teiji', 'Teijirō', 'Teiko', 'Teizō',
        'Teppei', 'Teruaki', 'Teruhiko', 'Teruhisa', 'Terumasa', 'Terunobu', 'Teruo', 'Teruyoshi', 'Teruyuki', 'Tetsu',
        'Tetsuharu', 'Tetsuji', 'Tetsumasa', 'Tetsuo ', 'Tetsurō', 'Tetsushi', 'Tetsutarō', 'Tetsuya', 'Tetsuzō', 'Togo ',
        'Tokihiko', 'Tokio', 'Tokuji ', 'Tokujirō', 'Tokuo', 'Tokurō', 'Tokutarō', 'Tomio', 'Tomoaki', 'Tomochika',
        'Tomoharu', 'Tomohide', 'Tomohiko', 'Tomohiro', 'Tomohisa', 'Tomohito', 'Tomoji', 'Tomokazu', 'Tomoki', 'Tomomichi',
        'Tomonobu', 'Tomonori', 'Tomotaka', 'Tomoya', 'Tomoyasu', 'Tomoyoshi', 'Tomoyuki', 'Torahiko', 'Toru ', 'Toshi ',
        'Toshiaki', 'Toshiharu', 'Toshihide', 'Toshihiko', 'Toshihiro', 'Toshihisa', 'Toshihito', 'Toshikatsu', 'Toshikazu', 'Toshiki',
        'Toshimasa', 'Toshimi', 'Toshimichi', 'Toshimitsu', 'Toshinaga', 'Toshinari', 'Toshinobu', 'Toshinori', 'Toshio', 'Toshirō',
        'Toshitada', 'Toshitaka', 'Toshitsugu', 'Toshiya', 'Toshiyasu', 'Toshiyuki', 'Toshizō', 'Toyoaki', 'Toyohiko', 'Toyokazu',
        'Toyomatsu', 'Toyoshige', 'Toyozō', 'Tsugio', 'Tsuneharu', 'Tsunehisa', 'Tsunejirō', 'Tsunemi', 'Tsunenori', 'Tsuneo',
        'Tsuneyoshi', 'Tsuneyuki', 'Tsutomu', 'Tsuyoshi', 'Umanosuke', 'Umeji', 'Wataru', 'Yahiko', 'Yahiro', 'Yanosuke',
        'Yashiro', 'Yasuaki', 'Yasufumi', 'Yasuharu', 'Yasuhide', 'Yasuhiko', 'Yasuhiro', 'Yasuhisa', 'Yasuji', 'Yasujirō',
        'Yasukazu', 'Yasuki', 'Yasumasa', 'Yasumi', 'Yasumichi', 'Yasunari', 'Yasunobu', 'Yasunori', 'Yasuo', 'Yasurō',
        'Yasushi', 'Yasutaka', 'Yasutake', 'Yasutomo', 'Yasutoshi', 'Yasuyoshi', 'Yasuyuki', 'Yatarō', 'Yōhei', 'Yōichi',
        'Yōichirō', 'Yōji', 'Yōjirō', 'Yorimitsu', 'Yorinobu', 'Yorishige', 'Yoritaka', 'Yoritsugu', 'Yoritsune', 'Yoriyuki',
        'Yoshi ', 'Yoshifumi', 'Yoshihide', 'Yoshihiko', 'Yoshihiro', 'Yoshihisa', 'Yoshihito', 'Yoshiie', 'Yoshikane', 'Yoshikatsu',
        'Yoshikazu', 'Yoshiki', 'Yoshikiyo', 'Yoshikuni', 'Yoshimasa', 'Yoshimatsu ', 'Yoshimichi', 'Yoshinaga', 'Yoshinao', 'Yoshinari',
        'Yoshinobu', 'Yoshinori', 'Yoshio', 'Yoshirō', 'Yoshisada', 'Yoshishige', 'Yoshisuke', 'Yoshitaka', 'Yoshitake', 'Yoshitarō',
        'Yoshiteru', 'Yoshito', 'Yoshitomo', 'Yoshitsugu', 'Yoshiya', 'Yoshiyasu', 'Yoshiyuki', 'Yōsuke', 'Yōta', 'Yōzō',
        'Yūdai', 'Yugi', 'Yugo', 'Yūhei', 'Yuichi', 'Yūichirō', 'Yūji', 'Yūjirō', 'Yūkichi', 'Yukiharu',
        'Yukihiko', 'Yukihiro', 'Yukimasa', 'Yukimura', 'Yukinobu', 'Yukinori', 'Yukio', 'Yukitaka', 'Yukito', 'Yukiya',
        'Yukiyoshi', 'Yūsaku', 'Yūsei', 'Yūshi', 'Yūsuke', 'Yūta', 'Yutaka', 'Yūtarō', 'Yūto', 'Yūya',
        'Yūzō', 'Yuzuru', 'Zenjiro', 'Zenkichi', 'Zentarō', 'Zenzō'
    );

    /**
     * {@link} http://dic.nicovideo.jp/a/%E6%97%A5%E6%9C%AC%E4%BA%BA%E3%81%AE%E5%90%8D%E5%89%8D%E4%B8%80%E8%A6%A7
     * {@link} http://www.meijiyasuda.co.jp/enjoy/ranking/
     */
//    protected static $firstNameFemale = array(
//        '明美', 'あすか', '香織', '加奈', 'くみ子', 'さゆり', '知実', '千代',
//        '直子', '七夏', '花子', '春香', '真綾', '舞', '美加子', '幹', '桃子', '結衣', '裕美子', '陽子', '里佳',
//    );

    protected static $firstNameFemale = array(
        'Aika', 'Aiko', 'Aimi', 'Aina ', 'Airi', 'Akane', 'Akari', 'Akemi', 'Akeno', 'Aki ',
        'Akie ', 'Akiko ', 'Akina ', 'Amane', 'Ami ', 'Anzu', 'Aoi ', 'Asako', 'Asami', 'Asuka ',
        'Asumi', 'Asuna', 'Atsuko', 'Atsumi ', 'Aya ', 'Ayaka ', 'Ayako', 'Ayame ', 'Ayami', 'Ayana ',
        'Ayane', 'Ayano', 'Ayu ', 'Ayuka', 'Ayumi', 'Azumi ', 'Azusa ', 'Chie', 'Chieko', 'Chiemi',
        'Chiharu', 'Chiho', 'Chika ', 'Chinami', 'Chinatsu', 'Chisato', 'Chitose', 'Chiyako', 'Chiyo', 'Chiyoko',
        'Chizuko', 'Chizuru', 'Eiko', 'Eimi', 'Emi', 'Emiko', 'Emiri', 'Eri ', 'Erika ', 'Eriko',
        'Etsuko', 'Fujiko', 'Fukumi', 'Fumie ', 'Fumika', 'Fumiko', 'Fusako', 'Fuyuko', 'Fuyumi', 'Hana ',
        'Hanae', 'Hanako ', 'Haruhi', 'Haruko', 'Haruna ', 'Haruyo', 'Hatsue', 'Hideko', 'Hidemi', 'Himeko',
        'Hiroe', 'Hiroka', 'Hiroko', 'Hiroyo', 'Hisae', 'Hisako', 'Hisaya', 'Hisayo', 'Hitomi ', 'Honami ',
        'Honoka ', 'Ichiko', 'Ikue', 'Ikumi', 'Itsuko', 'Itsumi', 'Jitsuko', 'Junko', 'Kaguya', 'Kaho ',
        'Kahoru', 'Kana ', 'Kanae', 'Kanako', 'Kanna ', 'Kaori', 'Karin ', 'Kasumi ', 'Katsuko', 'Kawai ',
        'Kayoko', 'Kazue', 'Kazuha', 'Kazuko', 'Kazusa', 'Kazuyo', 'Keiki ', 'Keiko ', 'Kiko ', 'Kikue',
        'Kikuko', 'Kimiko', 'Kira ', 'Kiyoko', 'Koharu', 'Konomi', 'Kotomi', 'Kotori', 'Kozue', 'Kumi ',
        'Kumiko', 'Kuniko', 'Kurenai', 'Kuriko', 'Kyoko', 'Maaya', 'Machi ', 'Machiko', 'Madoka', 'Maho',
        'Maiko ', 'Maki ', 'Makiko', 'Mami ', 'Mamiko ', 'Mana ', 'Manaka', 'Manami', 'Mao ', 'Mari ',
        'Maria ', 'Marie ', 'Mariko ', 'Masae', 'Masako', 'Matsuko', 'Mayako', 'Mayu ', 'Mayuko', 'Mayumi',
        'Mayura (disambiguation)', 'Megu', 'Megumi', 'Mei ', 'Meiko ', 'Meisa', 'Michiko', 'Mie', 'Mieko', 'Miho',
        'Mihoko', 'Miiko', 'Mika', 'Mikako', 'Miki ', 'Mikiko', 'Miku', 'Mikuru', 'Mimori', 'Mina ',
        'Minae', 'Minako', 'Mineko', 'Misaki ', 'Misako', 'Misato', 'Mitsuki', 'Mitsuko', 'Mitsuyo', 'Miu ',
        'Miwa', 'Miwako', 'Miyabi ', 'Miyako ', 'Miyoko', 'Miyu', 'Miyuki', 'Miyumi', 'Miyū', 'Mizuho',
        'Mizuki', 'Mizuko', 'Momo', 'Momoe', 'Momoka', 'Momoko', 'Motoko', 'Mutsuko', 'Mutsumi', 'Nagako',
        'Nami', 'Nana ', 'Nanako', 'Nanami', 'Nanase', 'Nao ', 'Naoko', 'Narumi', 'Natsue', 'Natsuko',
        'Natsume', 'Natsumi', 'Nobuko', 'Nodoka', 'Noriko', 'Noriyo', 'Nozomi ', 'Omi ', 'Otoha', 'Otome ',
        'Ran', 'Reika', 'Reiko', 'Rena', 'Rie', 'Rieko', 'Riho ', 'Rika', 'Rikako', 'Rina ',
        'Risako', 'Ritsuko', 'Rumi ', 'Rumiko', 'Runa', 'Ruri', 'Ruriko', 'Ryōka', 'Ryoko', 'Sachie',
        'Sachiko', 'Sadako', 'Saeko ', 'Saki ', 'Sakie', 'Sakiko', 'Sakura ', 'Sakurako', 'Sanae', 'Saori',
        'Satoko', 'Satomi', 'Sawako', 'Saya', 'Sayaka', 'Sayako', 'Sayoko', 'Sayumi', 'Sayuri ', 'Seiko ',
        'Setsuko', 'Shigeko', 'Shiho ', 'Shiina ', 'Shimako', 'Shinako', 'Shino', 'Shiori', 'Shizue', 'Shizuko',
        'Shoko', 'Shuko', 'Sugako', 'Sumika', 'Sumiko', 'Sumire', 'Suzue', 'Suzuka', 'Suzuko', 'Taeko',
        'Takako', 'Takeko', 'Tamao', 'Tamiko', 'Tatsuko', 'Teiko', 'Teruko', 'Terumi', 'Tokiko', 'Tokuko',
        'Tomiko', 'Tomoka', 'Tomoko', 'Tomoyo', 'Toshiko', 'Toyoko ', 'Tsukiko', 'Tsuneko', 'Tsuru ', 'Umeko',
        'Wakako', 'Yaeko', 'Yasue', 'Yasuko', 'Yayoi ', 'Yoko ', 'Yoshiko', 'Yoshino', 'Yui ', 'Yuka ',
        'Yukari', 'Yukie', 'Yukiko', 'Yukina', 'Yūko', 'Yumeko', 'Yumi ', 'Yumika ', 'Yumiko', 'Yurie',
        'Yurika', 'Yuriko', 'Yurina'
    );

    /**
     * {@link} http://dic.nicovideo.jp/a/%E6%97%A5%E6%9C%AC%E3%81%AE%E8%8B%97%E5%AD%97%28%E5%90%8D%E5%AD%97%29%E3%81%AE%E4%B8%80%E8%A6%A7
     */
//    protected static $lastName = array(
//        '青田', '青山', '石田', '井高', '伊藤', '井上', '宇野', '江古田', '大垣',
//        '加藤', '加納', '喜嶋', '木村', '桐山', '工藤', '小泉', '小林', '近藤',
//        '斉藤', '坂本', '佐々木', '佐藤', '笹田', '鈴木', '杉山',
//        '高橋', '田中', '田辺', '津田',
//        '中島', '中村', '渚', '中津川', '西之園', '野村',
//        '原田', '浜田', '廣川', '藤本',
//        '松本', '三宅', '宮沢', '村山',
//        '山岸', '山口', '山田', '山本', '吉田', '吉本',
//        '若松', '渡辺',
//    );

    protected static $lastName = array(
        'Satou', 'Suzuki', 'Takahashi', 'Tanaka', 'Watanabe', 'Itou', 'Yamamoto', 'Nakamura', 'Ohayashi', 'Kobayashi',
        'Katou', 'Kichida', 'Yoshida', 'Yamada', 'Sasaki', 'Yamaguchi', 'Matsumoto', 'Ine', 'Inoue', 'Saitou',
        'Kimura', 'Hayashi', 'Rin', 'Kiyomizu', 'Shimizu', 'Yamasaki', 'Ikeda', 'Abe', 'Mori', 'Hashimoto',
        'Yamashita', 'Ishikawa', 'Nakashima', 'Maeda', 'Fujita', 'Ogawa', 'Kokawa', 'Okada', 'Gatou', 'Gotou',
        'Hasegawa', 'Hayagawa', 'Samurakami', 'Murakami', 'Kondou', 'Chikafuji', 'Ishii', 'Sakamoto', 'Endou', 'Aoki',
        'Fujii', 'Nishimura', 'Fukuda', 'Oota', 'Miura', 'Fujihara', 'Okamoto', 'Matsuda', 'Saitou', 'Nakagawa',
        'Nakano', 'Harada', 'Ono', 'Kono', 'Sanu', 'Takeuchi', 'Tamura', 'Kaneko', 'Wada', 'Nakayama',
        'Ishida', 'Ageda', 'Ueda', 'Kamida', 'Jouda', 'Morita', 'Hara', 'Shibata', 'Sakai', 'Sakei',
        'Kudou', 'Kodou', 'Yokoyama', 'Miyazaki', 'Miyamoto', 'Uchida', 'Kouki', 'Takaki', 'Andou', 'Taniguchi',
        'Oono', 'Imai', 'Maruyama', 'Kouda', 'Takata', 'Kawano', 'Kouno', 'Fujimoto', 'Ojima', 'Kojima',
        'Takeda', 'Murata', 'Agano', 'Ueno', 'Sugiyama', 'Masuda', 'Sugahara', 'Hirano', 'Oyama', 'Koyama',
        'Ootsuka', 'Kubo', 'Chiba', 'Matsui', 'Iwasaki', 'Noguchi', 'Matsuo', 'Kishita', 'Kikuchi', 'Nomura',
        'Sano', 'Watanabe', 'Arai', 'Shini', 'Nii', 'Sugimoto', 'Oonishi', 'Sakurai', 'Kogawa', 'Furukawa',
        'Ichikawa', 'Shimada', 'Komatsu', 'Kouno', 'Takano', 'Mizuno', 'Kichikawa', 'Yoshikawa', 'Yamauchi', 'Nishida',
        'Kikuchi', 'Saikawa', 'Nishikawa', 'Kitamura', 'Hamada', 'Ikarashi', 'Yasuda', 'Nakada', 'Kawaguchi', 'Hirata',
        'Heida', 'Kawasaki', 'Azuma', 'Tou', 'Higashi', 'Iida', 'Honda', 'Kubota', 'Yoshimura', 'Tsuji',
        'Kan', 'Seki', 'Nakanishi', 'Fukushima', 'Iwata', 'Hatsutori', 'Toiguchi', 'Higuchi', 'Kawakami', 'Matsuoka',
        'Nagai', 'Yamanaka', 'Taguchi', 'Morimoto', 'Yano', 'Akiyama', 'Tsuchiya', 'Ishihara', 'Matsushita', 'Umaba',
        'Baba', 'Oohashi', 'Yoshioka', 'Matsuura', 'Oike', 'Koike', 'Asano', 'Ookubo', 'Kumagai', 'Kumatani',
        'Araki', 'Noda', 'Kawamura', 'Hoshino', 'Hirose', 'Ootani', 'Kurota', 'Ozaki', 'Tanabe', 'Eida',
        'Nagata', 'Matsumura', 'Bouzuki', 'Mochizuki', 'Motsuzuki', 'Hori', 'Naitou', 'Kanno', 'Sugano', 'Nishiyama',
        'Ooshima', 'Hirai', 'Iwamoto', 'Katayama', 'Sawada', 'Honma', 'Hayakawa', 'Yokota', 'Arai', 'Okazaki',
        'Kamuta', 'Ooishi', 'Narita', 'Oda', 'Koda', 'Miyata', 'Ishibashi', 'Sutou', 'Shinohara', 'Hagiwara',
        'Kouyama', 'Takayama', 'Konishi', 'Kurihara', 'Matsubara', 'Itou', 'Miyake', 'Fukui', 'Ozawa', 'Kozawa',
        'Nan', 'Minami', 'Oomori', 'Okumura', 'Kataoka', 'Uchiyama', 'Miyanohara', 'Miyabara', 'Nagashima', 'Kawamoto',
        'Shigeki', 'Moki', 'Kuhabara', 'Kuwabara', 'Oka', 'Takuda', 'Tomita', 'Sekiguchi', 'Matsunaga', 'Okuta',
        'Kitakawa', 'Koga', 'Uenohara', 'Kamihara', 'Hagi', 'Yagi', 'Kino', 'Yoshino', 'Shiraishi', 'Imamura',
        'Kamimura', 'Jouon', 'Koizumi', 'Nakao', 'Aoyama', 'Hirayama', 'Makino', 'Terada', 'Shibutani', 'Okamura',
        'Kodama', 'Sakaguchi', 'Kaai', 'Kawai', 'Ooyama', 'Daisen', 'Oota', 'Tada', 'Onodera', 'Miyashita',
        'Ogura', 'Kokura', 'Takeda', 'Chikuda', 'Adachi', 'Ogasahara', 'Amano', 'Tenno', 'Murayama', 'Sakai',
        'Sai', 'Nishi', 'Sugiura', 'Sakata', 'Ohara', 'Kohara', 'Toyota', 'Kawamura', 'Koumura', 'Taketou',
        'Butou', 'Mutou', 'Kakuta', 'Sumita', 'Shinoda', 'Suitani', 'Mizutani', 'Nemoto', 'Memoto', 'Sekine',
        'Morishita', 'Nakai', 'Kanda', 'Kouda', 'Tashima', 'Ueda', 'Tsukamoto', 'Sakuma', 'Iitsuka', 'Meshizuka',
        'Maekawa', 'Abe', 'Asai', 'Yamane', 'Kawashima', 'Uemura', 'Moteki', 'Sanwa', 'Miwa', 'Shitamura', 'Yamamura', 'Tanba',
        'Shirai', 'Shiroi', 'Hakui', 'Hirai', 'Miyakawa', 'Okabe', 'Oosawa', 'Ookawa', 'Daikawa',
        'Osada', 'Chouda', 'Nagata', 'Horiuchi', 'Inagaki', 'Wakabayashi', 'Matsusaki', 'Enomoto', 'Moriyama', 'Kamitani',
        'Kouya', 'Shintani', 'Nakazawa', 'Eguchi', 'Nakatani', 'Hatakeyama', 'Koku', 'Tani', 'Hazama', 'Oikawa',
        'Oyokawa', 'Shikikawa', 'Hosokawa', 'Mikami', 'Imano', 'Konno', 'Nishio', 'Adachi', 'Tashiro', 'Iijima',
        'Ishizuka', 'Tsuda', 'Kishimoto', 'Arakawa', 'Nakahara', 'Nagao', 'Tsuchii', 'Doi', 'Honda', 'Morikawa',
        'Miyoshi', 'Toda', 'Kanai', 'Komeda', 'Maida', 'Yoneda', 'Inaba', 'Okano', 'Muramatsu', 'Matsuyama',
        'Saiki', 'Sahaku', 'Nishioka', 'Kai', 'Hoshi', 'Nakashima', 'Iwai', 'Kuroki', 'Tsutsumi', 'Kanada',
        'Kaneda', 'Nozaki', 'Ochiai', 'Hotsuda', 'Izumi', 'Nishino', 'Chouda', 'Machida', 'Saitou', 'Yamagishi',
        'Arata', 'Shinden', 'Niita', 'Koda', 'Furuta', 'Tokunaga', 'Kurokawa', 'Takisawa', 'Kawata', 'Yamakawa',
        'Sugita', 'Tsuchida', 'Toda', 'Kasahara', 'Kanazawa', 'Okuyama', 'Sangi', 'Miki', 'Suda', 'Umeta',
        'Murai', 'Nonaka', 'Horie', 'Ootake', 'Kawabata', 'Oomura', 'Kishi', 'Hidaka', 'Kajihara', 'Hirota',
        'Fujisawa', 'Nishimoto', 'Iguchi', 'Mukai', 'Ooki', 'Ooba', 'Matsushima', 'Takenaka', 'Sakakihara', 'Fujikawa',
        'Yoshimoto', 'Kawahara', 'Yasui', 'Ouchi', 'Oouchi', 'Takeshita', 'Yoshihara', 'Fujioka', 'Shiyouji', 'Tsukada',
        'Fukumoto', 'Yanagisawa', 'Takashima', 'Otani', 'Kotani', 'Fujimura', 'Kunai', 'Miyauchi', 'Takemoto', 'Tanikawa',
        'Yagawa', 'Uno', 'Ogata', 'Okuno', 'Miyazawa', 'Kubota', 'Shimoda', 'Kitano', 'Kurita', 'Ishikuno',
        'Kamei', 'Chouno', 'Nagano', 'Tairakawa', 'Hirakawa', 'Fujino', 'Niwa', 'Takai', 'Kotani', 'Furutani', 'Yoshizawa',
        'Aoyagi', 'Takemura', 'Ideguchi', 'Deguchi', 'Ogino', 'Shimada', 'Komori', 'Kurosawa', 'Tahara', 'Tawara',
        'Takase', 'Inada', 'Ooki', 'Oogusuku', 'Daijou', 'Susui', 'Tsutsui', 'Fukuoka', 'Yokoi', 'Oohira',
        'Ohira', 'Taihei', 'Miyagi', 'Oohara', 'Fukunaga', 'Hayashida', 'Shinosaki', 'Tominaga', 'Nagaoka', 'Mizokuchi',
        'Kanausuku', 'Kanegi', 'Kinjou', 'Yamaoka', 'Hiramatsu', 'Kitahara', 'Asada', 'Echi', 'Ochi', 'Kochi',
        'Tsuruta', 'Takei', 'Yanagita', 'Nagano', 'Oota', 'Daita', 'Nishizawa', 'Irie', 'Yuasa', 'Nagasawa',
        'Souma', 'Ishiyama', 'Sonoda', 'Takamatsu', 'Horikawa', 'Ninomiya', 'Nimiya', 'Usui', 'Tazuka', 'Tezuka',
        'Numata', 'Kawano', 'Kouno', 'Ishizaki', 'Fukasawa', 'Hanada', 'Higa', 'Hiyoshi', 'Ikegami', 'Shinoda',
        'Hiraoka', 'Tanimoto', 'Koide', 'Sugihara', 'Negishi', 'Saibara', 'Nishihara', 'Kasai', 'Seto', 'Tabata',
        'Nozawa', 'Katagiri', 'Hamaguchi', 'Ootsuki', 'Shimura', 'Aizawa', 'Yajima', 'Osaka', 'Kosaka', 'Kurata',
        'Hino', 'Fukuhara', 'Kanou', 'Senda', 'Chida', 'Horiguchi', 'Araya', 'Shintani', 'Niiya', 'Kawahara',
        'Gouhara', 'Matsuno', 'Murase', 'Tokuta', 'Kan', 'Suga', 'Taue', 'Tagami', 'Morioka', 'Tomita',
        'Yoshii', 'Kashiwagi', 'Hakugi', 'Shimasaki', 'Kitajima', 'Hamasaki', 'Hamano', 'Uchiumi', 'Utsumi', 'Shirakawa',
        'Nakamoto', 'Hatakenaka', 'Iwase', 'Oyanagi', 'Koyanagi', 'Akimoto', 'Sanya', 'Mitani', 'Oosaki', 'Daisaki',
        'Akita', 'Haraguchi');

    protected static $firstKanaNameFormat = array(
        '{{firstKanaNameMale}}',
        '{{firstKanaNameFemale}}',
    );

    protected static $maleKanaNameFormats = array(
        '{{lastKanaName}} {{firstKanaNameMale}}',
    );

    protected static $femaleKanaNameFormats = array(
        '{{lastKanaName}} {{firstKanaNameFemale}}',
    );

    protected static $firstKanaNameMale = array(
        'アキラ', 'アツシ', 'オサム', 'カズヤ', 'キョウスケ', 'ケンイチ', 'シュウヘイ', 'ショウタ', 'ジュン', 'ソウタロウ',
        'タイチ', 'タロウ', 'タクマ', 'ツバサ', 'トモヤ', 'ナオキ', 'ナオト', 'ヒデキ', 'ヒロシ', 'マナブ', 'ミツル', 'ミノル',
        'ユウキ', 'ユウタ', 'ヤスヒロ', 'ヨウイチ', 'ヨウスケ', 'リョウスケ', 'リョウヘイ', 'レイ',
    );

    protected static $firstKanaNameFemale = array(
        'アケミ', 'アスカ', 'カオリ', 'カナ', 'クミコ', 'サユリ', 'サトミ', 'チヨ',
        'ナオコ', 'ナナミ', 'ハナコ', 'ハルカ', 'マアヤ', 'マイ', 'ミカコ', 'ミキ', 'モモコ', 'ユイ', 'ユミコ', 'ヨウコ', 'リカ',
    );

    protected static $lastKanaName = array(
        'アオタ', 'アオヤマ', 'イシダ', 'イダカ', 'イトウ', 'ウノ', 'エコダ', 'オオガキ',
        'カノウ', 'カノウ', 'キジマ', 'キムラ', 'キリヤマ', 'クドウ', 'コイズミ', 'コバヤシ', 'コンドウ',
        'サイトウ', 'サカモト', 'ササキ', 'サトウ', 'ササダ', 'スズキ', 'スギヤマ',
        'タカハシ', 'タナカ', 'タナベ', 'ツダ',
        'ナカジマ', 'ナカムラ', 'ナギサ', 'ナカツガワ', 'ニシノソノ', 'ノムラ',
        'ハラダ', 'ハマダ', 'ヒロカワ', 'フジモト',
        'マツモト', 'ミヤケ', 'ミヤザワ', 'ムラヤマ',
        'ヤマギシ', 'ヤマグチ', 'ヤマダ', 'ヤマモト', 'ヨシダ', 'ヨシモト',
        'ワカマツ', 'ワタナベ',
    );

    /**
     * @param string|null $gender 'male', 'female' or null for any
     * @return string
     * @example 'アオタ アキラ'
     */
    public function kanaName($gender = null)
    {
        if ($gender === static::GENDER_MALE) {
            $format = static::randomElement(static::$maleKanaNameFormats);
        } elseif ($gender === static::GENDER_FEMALE) {
            $format = static::randomElement(static::$femaleKanaNameFormats);
        } else {
            $format = static::randomElement(array_merge(static::$maleKanaNameFormats, static::$femaleKanaNameFormats));
        }

        return $this->generator->parse($format);
    }

    /**
     * @param string|null $gender 'male', 'female' or null for any
     * @return string
     * @example 'アキラ'
     */
    public function firstKanaName($gender = null)
    {
        if ($gender === static::GENDER_MALE) {
            return static::firstKanaNameMale();
        } elseif ($gender === static::GENDER_FEMALE) {
            return static::firstKanaNameFemale();
        }

        return $this->generator->parse(static::randomElement(static::$firstKanaNameFormat));
    }

    /**
     * @example 'アキラ'
     */
    public static function firstKanaNameMale()
    {
        return static::randomElement(static::$firstKanaNameMale);
    }

    /**
     * @example 'アケミ'
     */
    public static function firstKanaNameFemale()
    {
        return static::randomElement(static::$firstKanaNameFemale);
    }

    /**
     * @example 'アオタ'
     */
    public static function lastKanaName()
    {
        return static::randomElement(static::$lastKanaName);
    }
}
