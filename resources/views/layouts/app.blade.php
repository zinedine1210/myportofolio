<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- MY CSS --}}
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/neu.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/hover.css">

    {{-- Favicon --}}
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    {{-- AOS --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    {{-- Toastr --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Trix editor --}}
    <link rel="stylesheet" type="text/css" href="../css/trix.css">
    <script type="text/javascript" src="../js/trix.js"></script>

    <title>{{ $title }} | My Portofolio</title>
</head>

<body>

    @include('partials.navbar')

    <div class="kosong mt-5 pt-5">

    </div>
    {{-- container --}}
    @yield('container')
    {{-- akhir container --}}

    <footer id="contact">
        {{-- gelombang --}}
        <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 400" xmlns="http://www.w3.org/2000/svg"
            class="transition duration-300 ease-in-out delay-150">
            <style>
                .path-0 {
                    animation: pathAnim-0 4s;
                    animation-timing-function: linear;
                    animation-iteration-count: infinite;
                }

                @keyframes pathAnim-0 {
                    0% {
                        d: path("M 0,400 C 0,400 0,100 0,100 C 34.40040995274157,102.90795991573194 68.80081990548314,105.81591983146389 106,97 C 143.19918009451686,88.18408016853611 183.19713033080905,67.64428058987644 232,68 C 280.80286966919095,68.35571941012356 338.4106587712805,89.60695780903033 382,94 C 425.5893412287195,98.39304219096967 455.1602345840688,85.92788817400216 486,86 C 516.8397654159312,86.07211182599784 548.9484028924443,98.68148949496099 593,106 C 637.0515971075557,113.31851050503901 693.0461538461539,115.34615384615387 737,123 C 780.9538461538461,130.65384615384613 812.8669817229404,143.9338951204236 854,135 C 895.1330182770596,126.06610487957639 945.485919262085,94.91826567215169 980,77 C 1014.514080737915,59.08173432784831 1033.1893412287195,54.39304219096965 1070,65 C 1106.8106587712805,75.60695780903035 1161.756715823037,101.5095655639697 1206,104 C 1250.243284176963,106.4904344360303 1283.7837954791323,85.56869555315151 1321,81 C 1358.2162045208677,76.43130444684849 1399.108102260434,88.21565222342424 1440,100 C 1440,100 1440,400 1440,400 Z");
                    }

                    25% {
                        d: path("M 0,400 C 0,400 0,100 0,100 C 42.4179221469377,91.32764618800888 84.8358442938754,82.65529237601777 126,76 C 167.1641557061246,69.34470762398223 207.07454497143618,64.70647668393782 241,74 C 274.9254550285638,83.29352331606218 302.86597582038,106.51880088823096 337,105 C 371.13402417962,103.48119911176904 411.4615517470439,77.2183197631384 459,81 C 506.5384482529561,84.7816802368616 561.2878171914442,118.60792005921539 607,128 C 652.7121828085558,137.3920799407846 689.3871794871793,122.35 732,119 C 774.6128205128207,115.65 823.1634648598381,123.99207994078463 858,132 C 892.8365351401619,140.00792005921537 913.9589610734689,147.68168023686158 948,131 C 982.0410389265311,114.31831976313842 1029.0006908462867,73.28119911176906 1069,62 C 1108.9993091537133,50.718800888230945 1142.0382755413843,69.19352331606218 1178,77 C 1213.9617244586157,84.80647668393782 1252.8462069881757,81.94470762398223 1297,84 C 1341.1537930118243,86.05529237601777 1390.5768965059121,93.02764618800889 1440,100 C 1440,100 1440,400 1440,400 Z");
                    }

                    50% {
                        d: path("M 0,400 C 0,400 0,100 0,100 C 45.17504602478695,82.40976199965837 90.3500920495739,64.81952399931674 126,69 C 161.6499079504261,73.18047600068326 187.77467782649137,99.1316660023914 229,115 C 270.22532217350863,130.8683339976086 326.55119664446084,136.6538119911177 371,127 C 415.44880335553916,117.34618800888231 448.02053559566514,92.25308603313786 490,93 C 531.9794644043349,93.74691396686214 583.3666609728785,120.33384387633089 619,126 C 654.6333390271215,131.6661561236691 674.5128205128206,116.41153846153847 704,102 C 733.4871794871794,87.58846153846153 772.5820569758392,74.02000227751522 821,69 C 869.4179430241608,63.97999772248478 927.158951583822,67.50845242840062 967,78 C 1006.841048416178,88.49154757159938 1028.7821366888725,105.94618800888229 1066,113 C 1103.2178633111275,120.05381199111771 1155.712501660688,116.70679553607015 1203,107 C 1250.287498339312,97.29320446392985 1292.367856668375,81.2266298468371 1331,79 C 1369.632143331625,76.7733701531629 1404.8160716658126,88.38668507658144 1440,100 C 1440,100 1440,400 1440,400 Z");
                    }

                    75% {
                        d: path("M 0,400 C 0,400 0,100 0,100 C 49.89249463834956,115.67765662662035 99.78498927669912,131.3553132532407 133,130 C 166.21501072330088,128.6446867467593 182.7525375315531,110.25640361365751 219,95 C 255.2474624684469,79.74359638634249 311.2048605970886,67.61907229212927 358,74 C 404.7951394029114,80.38092770787073 442.42802008009267,105.26730721782536 485,108 C 527.5719799199073,110.73269278217464 575.083059082541,91.31169883656929 612,93 C 648.916940917459,94.68830116343071 675.2397435897435,117.48589743589747 709,126 C 742.7602564102565,134.51410256410253 783.9579665584848,128.74471141984094 829,121 C 874.0420334415152,113.25528858015906 922.9283901763176,103.53525688473877 960,91 C 997.0716098236824,78.46474311526123 1022.3284727362445,63.114261041204045 1059,68 C 1095.6715272637555,72.88573895879595 1143.7577188787034,98.00769895044508 1189,108 C 1234.2422811212966,117.99230104955492 1276.640651748942,112.85494315701568 1318,109 C 1359.359348251058,105.14505684298432 1399.679674125529,102.57252842149217 1440,100 C 1440,100 1440,400 1440,400 Z");
                    }

                    100% {
                        d: path("M 0,400 C 0,400 0,100 0,100 C 34.40040995274157,102.90795991573194 68.80081990548314,105.81591983146389 106,97 C 143.19918009451686,88.18408016853611 183.19713033080905,67.64428058987644 232,68 C 280.80286966919095,68.35571941012356 338.4106587712805,89.60695780903033 382,94 C 425.5893412287195,98.39304219096967 455.1602345840688,85.92788817400216 486,86 C 516.8397654159312,86.07211182599784 548.9484028924443,98.68148949496099 593,106 C 637.0515971075557,113.31851050503901 693.0461538461539,115.34615384615387 737,123 C 780.9538461538461,130.65384615384613 812.8669817229404,143.9338951204236 854,135 C 895.1330182770596,126.06610487957639 945.485919262085,94.91826567215169 980,77 C 1014.514080737915,59.08173432784831 1033.1893412287195,54.39304219096965 1070,65 C 1106.8106587712805,75.60695780903035 1161.756715823037,101.5095655639697 1206,104 C 1250.243284176963,106.4904344360303 1283.7837954791323,85.56869555315151 1321,81 C 1358.2162045208677,76.43130444684849 1399.108102260434,88.21565222342424 1440,100 C 1440,100 1440,400 1440,400 Z");
                    }
                }

            </style>
            <path
                d="M 0,400 C 0,400 0,100 0,100 C 34.40040995274157,102.90795991573194 68.80081990548314,105.81591983146389 106,97 C 143.19918009451686,88.18408016853611 183.19713033080905,67.64428058987644 232,68 C 280.80286966919095,68.35571941012356 338.4106587712805,89.60695780903033 382,94 C 425.5893412287195,98.39304219096967 455.1602345840688,85.92788817400216 486,86 C 516.8397654159312,86.07211182599784 548.9484028924443,98.68148949496099 593,106 C 637.0515971075557,113.31851050503901 693.0461538461539,115.34615384615387 737,123 C 780.9538461538461,130.65384615384613 812.8669817229404,143.9338951204236 854,135 C 895.1330182770596,126.06610487957639 945.485919262085,94.91826567215169 980,77 C 1014.514080737915,59.08173432784831 1033.1893412287195,54.39304219096965 1070,65 C 1106.8106587712805,75.60695780903035 1161.756715823037,101.5095655639697 1206,104 C 1250.243284176963,106.4904344360303 1283.7837954791323,85.56869555315151 1321,81 C 1358.2162045208677,76.43130444684849 1399.108102260434,88.21565222342424 1440,100 C 1440,100 1440,400 1440,400 Z"
                stroke="none" stroke-width="0" fill="#16697466"
                class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
            <style>
                .path-1 {
                    animation: pathAnim-1 4s;
                    animation-timing-function: linear;
                    animation-iteration-count: infinite;
                }

                @keyframes pathAnim-1 {
                    0% {
                        d: path("M 0,400 C 0,400 0,200 0,200 C 35.44263982994552,192.31922317751332 70.88527965989104,184.63844635502667 110,178 C 149.11472034010896,171.36155364497333 191.9015211903813,165.76543775740666 241,172 C 290.0984788096187,178.23456224259334 345.50863557858384,196.29980261534666 379,200 C 412.49136442141616,203.70019738465334 424.06393649528366,193.03535178120669 461,197 C 497.93606350471634,200.96464821879331 560.2356184402817,219.55879025982654 602,215 C 643.7643815597183,210.44120974017346 664.9935897435896,182.72948717948717 701,167 C 737.0064102564104,151.27051282051283 787.7900225853595,147.52326102222477 834,162 C 880.2099774146405,176.47673897777523 921.8463199149727,209.1774687316138 962,225 C 1002.1536800850273,240.8225312683862 1040.8246977547496,239.76686405132 1079,233 C 1117.1753022452504,226.23313594868 1154.8548890660288,213.75507506310615 1196,208 C 1237.1451109339712,202.24492493689385 1281.7557459811346,203.21283569625538 1323,203 C 1364.2442540188654,202.78716430374462 1402.1221270094327,201.3935821518723 1440,200 C 1440,200 1440,400 1440,400 Z");
                    }

                    25% {
                        d: path("M 0,400 C 0,400 0,200 0,200 C 35.738972081459124,204.34364003871775 71.47794416291825,208.68728007743553 116,199 C 160.52205583708175,189.31271992256447 213.82719542978612,165.5945197289757 259,170 C 304.1728045702139,174.4054802710243 341.2132741179374,206.9346410066617 372,219 C 402.7867258820626,231.0653589933383 427.3197080984645,222.66691624437738 471,225 C 514.6802919015355,227.33308375562262 577.5078934882044,240.39769401582873 618,226 C 658.4921065117956,211.60230598417127 676.6487179487178,169.7423076923077 715,162 C 753.3512820512822,154.2576923076923 811.897234716924,180.6330752149405 857,189 C 902.102765283076,197.3669247850595 933.7623431835866,187.7253914479303 971,188 C 1008.2376568164134,188.2746085520697 1051.0533925487296,198.46535899333827 1093,212 C 1134.9466074512704,225.53464100666173 1176.0240866214958,242.41317257871663 1212,236 C 1247.9759133785042,229.58682742128337 1278.850260965287,199.88195069179525 1316,190 C 1353.149739034713,180.11804930820475 1396.5748695173565,190.05902465410236 1440,200 C 1440,200 1440,400 1440,400 Z");
                    }

                    50% {
                        d: path("M 0,400 C 0,400 0,200 0,200 C 46.79373873104443,201.2682201218471 93.58747746208886,202.53644024369416 132,214 C 170.41252253791114,225.46355975630584 200.443828882689,247.12245914707051 238,237 C 275.556171117311,226.87754085292949 320.63720700715515,184.9737231680237 359,171 C 397.36279299284485,157.0262768319763 429.00734308869033,170.9826481808347 465,174 C 500.99265691130967,177.0173518191653 541.3334206380838,169.0956841086375 582,178 C 622.6665793619162,186.9043158913625 663.6589743589743,212.63461538461536 712,208 C 760.3410256410257,203.36538461538464 816.0306819260187,168.36585435290098 857,163 C 897.9693180739813,157.63414564709902 924.2182979369508,181.9019672037807 965,193 C 1005.7817020630492,204.0980327962193 1061.0961263261781,202.02627683197628 1100,204 C 1138.9038736738219,205.97372316802372 1161.3971967583366,211.99292546831407 1192,220 C 1222.6028032416634,228.00707453168593 1261.3150866404753,238.00202129476742 1304,235 C 1346.6849133595247,231.99797870523258 1393.3424566797623,215.9989893526163 1440,200 C 1440,200 1440,400 1440,400 Z");
                    }

                    75% {
                        d: path("M 0,400 C 0,400 0,200 0,200 C 49.227163164987005,209.91223500161323 98.45432632997401,219.82447000322648 139,217 C 179.545673670026,214.17552999677352 211.40985784509098,198.61435498870733 251,205 C 290.590142154909,211.38564501129267 337.90624228966203,239.71811004194421 377,235 C 416.09375771033797,230.28188995805579 446.9651729962611,192.51320484351572 485,194 C 523.0348270037389,195.48679515648428 568.2330657252937,236.22907058399286 610,232 C 651.7669342747063,227.77092941600714 690.1025641025641,178.57051282051282 730,167 C 769.8974358974359,155.42948717948718 811.3566778644498,181.4888781339559 843,199 C 874.6433221355502,216.5111218660441 896.4707244396363,225.47397464366378 939,219 C 981.5292755603637,212.52602535633622 1044.7604243770045,190.61522329138907 1086,180 C 1127.2395756229955,169.38477670861093 1146.487578052345,170.06513219077988 1187,181 C 1227.512421947655,191.93486780922012 1289.2892634136158,213.12424794549148 1335,218 C 1380.7107365863842,222.87575205450852 1410.355368293192,211.43787602725428 1440,200 C 1440,200 1440,400 1440,400 Z");
                    }

                    100% {
                        d: path("M 0,400 C 0,400 0,200 0,200 C 35.44263982994552,192.31922317751332 70.88527965989104,184.63844635502667 110,178 C 149.11472034010896,171.36155364497333 191.9015211903813,165.76543775740666 241,172 C 290.0984788096187,178.23456224259334 345.50863557858384,196.29980261534666 379,200 C 412.49136442141616,203.70019738465334 424.06393649528366,193.03535178120669 461,197 C 497.93606350471634,200.96464821879331 560.2356184402817,219.55879025982654 602,215 C 643.7643815597183,210.44120974017346 664.9935897435896,182.72948717948717 701,167 C 737.0064102564104,151.27051282051283 787.7900225853595,147.52326102222477 834,162 C 880.2099774146405,176.47673897777523 921.8463199149727,209.1774687316138 962,225 C 1002.1536800850273,240.8225312683862 1040.8246977547496,239.76686405132 1079,233 C 1117.1753022452504,226.23313594868 1154.8548890660288,213.75507506310615 1196,208 C 1237.1451109339712,202.24492493689385 1281.7557459811346,203.21283569625538 1323,203 C 1364.2442540188654,202.78716430374462 1402.1221270094327,201.3935821518723 1440,200 C 1440,200 1440,400 1440,400 Z");
                    }
                }

            </style>
            <path
                d="M 0,400 C 0,400 0,200 0,200 C 35.44263982994552,192.31922317751332 70.88527965989104,184.63844635502667 110,178 C 149.11472034010896,171.36155364497333 191.9015211903813,165.76543775740666 241,172 C 290.0984788096187,178.23456224259334 345.50863557858384,196.29980261534666 379,200 C 412.49136442141616,203.70019738465334 424.06393649528366,193.03535178120669 461,197 C 497.93606350471634,200.96464821879331 560.2356184402817,219.55879025982654 602,215 C 643.7643815597183,210.44120974017346 664.9935897435896,182.72948717948717 701,167 C 737.0064102564104,151.27051282051283 787.7900225853595,147.52326102222477 834,162 C 880.2099774146405,176.47673897777523 921.8463199149727,209.1774687316138 962,225 C 1002.1536800850273,240.8225312683862 1040.8246977547496,239.76686405132 1079,233 C 1117.1753022452504,226.23313594868 1154.8548890660288,213.75507506310615 1196,208 C 1237.1451109339712,202.24492493689385 1281.7557459811346,203.21283569625538 1323,203 C 1364.2442540188654,202.78716430374462 1402.1221270094327,201.3935821518723 1440,200 C 1440,200 1440,400 1440,400 Z"
                stroke="none" stroke-width="0" fill="#16697488"
                class="transition-all duration-300 ease-in-out delay-150 path-1"></path>
            <style>
                .path-2 {
                    animation: pathAnim-2 4s;
                    animation-timing-function: linear;
                    animation-iteration-count: infinite;
                }

                @keyframes pathAnim-2 {
                    0% {
                        d: path("M 0,400 C 0,400 0,300 0,300 C 48.404699273093044,323.32672569226975 96.80939854618609,346.65345138453944 140,336 C 183.1906014538139,325.34654861546056 221.16710508834865,280.7129201541119 252,273 C 282.83289491165135,265.2870798458881 306.52218110041946,294.4948679990131 345,310 C 383.47781889958054,325.5051320009869 436.7441705099736,327.3076078498358 480,316 C 523.2558294900264,304.6923921501642 556.5011368596861,280.27470060164364 593,275 C 629.4988631403139,269.72529939835636 669.2512820512819,283.59358974358975 712,294 C 754.7487179487181,304.40641025641025 800.4937349351859,311.3509404239975 841,316 C 881.5062650648141,320.6490595760025 916.773778207975,323.00264856042054 959,318 C 1001.226221792025,312.99735143957946 1050.411152232914,300.63846533432024 1091,302 C 1131.588847767086,303.36153466567976 1163.5816128603692,318.4434901022984 1195,319 C 1226.4183871396308,319.5565098977016 1257.2623963256087,305.58757425648616 1298,300 C 1338.7376036743913,294.41242574351384 1389.3688018371956,297.2062128717569 1440,300 C 1440,300 1440,400 1440,400 Z");
                    }

                    25% {
                        d: path("M 0,400 C 0,400 0,300 0,300 C 35.0782895860616,281.02627018922357 70.1565791721232,262.05254037844713 109,270 C 147.8434208278768,277.94745962155287 190.45197289756874,312.81610867543515 232,325 C 273.54802710243126,337.18389132456485 314.0355292376018,326.6830249198125 354,317 C 393.9644707623982,307.3169750801875 433.4059101520241,298.451791645315 468,291 C 502.5940898479759,283.548208354685 532.3408301543017,277.5098084989277 578,285 C 623.6591698456983,292.4901915010723 685.2307692307692,313.50897435897434 735,318 C 784.7692307692308,322.49102564102566 822.7360929226213,310.4542940651749 855,307 C 887.2639070773787,303.5457059348251 913.8248590787451,308.67384938032603 956,308 C 998.1751409212549,307.32615061967397 1055.9644707623982,300.85030841352085 1100,304 C 1144.0355292376018,307.14969158647915 1174.3172578716622,319.92491696559057 1206,312 C 1237.6827421283378,304.07508303440943 1270.7664977509537,275.450023724117 1310,270 C 1349.2335022490463,264.549976275883 1394.616751124523,282.2749881379415 1440,300 C 1440,300 1440,400 1440,400 Z");
                    }

                    50% {
                        d: path("M 0,400 C 0,400 0,300 0,300 C 34.123149993357245,282.4627607280457 68.24629998671449,264.92552145609136 113,275 C 157.7537000132855,285.07447854390864 213.13795004649933,322.7606749036801 252,336 C 290.8620499535007,349.2393250963199 313.2018998272884,338.0317789291883 355,325 C 396.7981001727116,311.9682210708117 458.05445064434707,297.1122093795669 495,304 C 531.9455493556529,310.8877906204331 544.5802975953235,339.5193835525442 583,335 C 621.4197024046765,330.4806164474558 685.624358974359,292.81025641025644 738,278 C 790.375641025641,263.18974358974356 830.9222665072406,271.23959080643016 859,278 C 887.0777334927594,284.76040919356984 902.6865749966786,290.23138036402287 942,293 C 981.3134250033214,295.76861963597713 1044.3314335060447,295.8348877374784 1096,300 C 1147.6685664939553,304.1651122625216 1187.9876909791417,312.4290686860635 1217,314 C 1246.0123090208583,315.5709313139365 1263.717802577388,310.44883751826757 1299,307 C 1334.282197422612,303.55116248173243 1387.1410987113059,301.77558124086625 1440,300 C 1440,300 1440,400 1440,400 Z");
                    }

                    75% {
                        d: path("M 0,400 C 0,400 0,300 0,300 C 50.21516920040237,300.62551006851527 100.43033840080474,301.25102013703054 139,309 C 177.56966159919526,316.74897986296946 204.4938155971834,331.62142952039324 237,317 C 269.5061844028166,302.37857047960676 307.5943992104614,258.26326178139647 346,262 C 384.4056007895386,265.73673821860353 423.12858756097097,317.3255233540208 465,316 C 506.87141243902903,314.6744766459792 551.8912505456547,260.43464480252044 597,265 C 642.1087494543453,269.56535519747956 687.3064102564103,332.9358974358974 722,337 C 756.6935897435897,341.0641025641026 780.8831084287042,285.8217654538898 825,266 C 869.1168915712958,246.17823454611022 933.1611560287727,261.7770407485433 978,271 C 1022.8388439712273,280.2229592514567 1048.4722674562051,283.07007155193685 1089,293 C 1129.5277325437949,302.92992844806315 1184.9497741464063,319.9426730437093 1219,328 C 1253.0502258535937,336.0573269562907 1265.7286359581697,335.15923627322593 1299,329 C 1332.2713640418303,322.84076372677407 1386.1356820209153,311.42038186338704 1440,300 C 1440,300 1440,400 1440,400 Z");
                    }

                    100% {
                        d: path("M 0,400 C 0,400 0,300 0,300 C 48.404699273093044,323.32672569226975 96.80939854618609,346.65345138453944 140,336 C 183.1906014538139,325.34654861546056 221.16710508834865,280.7129201541119 252,273 C 282.83289491165135,265.2870798458881 306.52218110041946,294.4948679990131 345,310 C 383.47781889958054,325.5051320009869 436.7441705099736,327.3076078498358 480,316 C 523.2558294900264,304.6923921501642 556.5011368596861,280.27470060164364 593,275 C 629.4988631403139,269.72529939835636 669.2512820512819,283.59358974358975 712,294 C 754.7487179487181,304.40641025641025 800.4937349351859,311.3509404239975 841,316 C 881.5062650648141,320.6490595760025 916.773778207975,323.00264856042054 959,318 C 1001.226221792025,312.99735143957946 1050.411152232914,300.63846533432024 1091,302 C 1131.588847767086,303.36153466567976 1163.5816128603692,318.4434901022984 1195,319 C 1226.4183871396308,319.5565098977016 1257.2623963256087,305.58757425648616 1298,300 C 1338.7376036743913,294.41242574351384 1389.3688018371956,297.2062128717569 1440,300 C 1440,300 1440,400 1440,400 Z");
                    }
                }

            </style>
            <path
                d="M 0,400 C 0,400 0,300 0,300 C 48.404699273093044,323.32672569226975 96.80939854618609,346.65345138453944 140,336 C 183.1906014538139,325.34654861546056 221.16710508834865,280.7129201541119 252,273 C 282.83289491165135,265.2870798458881 306.52218110041946,294.4948679990131 345,310 C 383.47781889958054,325.5051320009869 436.7441705099736,327.3076078498358 480,316 C 523.2558294900264,304.6923921501642 556.5011368596861,280.27470060164364 593,275 C 629.4988631403139,269.72529939835636 669.2512820512819,283.59358974358975 712,294 C 754.7487179487181,304.40641025641025 800.4937349351859,311.3509404239975 841,316 C 881.5062650648141,320.6490595760025 916.773778207975,323.00264856042054 959,318 C 1001.226221792025,312.99735143957946 1050.411152232914,300.63846533432024 1091,302 C 1131.588847767086,303.36153466567976 1163.5816128603692,318.4434901022984 1195,319 C 1226.4183871396308,319.5565098977016 1257.2623963256087,305.58757425648616 1298,300 C 1338.7376036743913,294.41242574351384 1389.3688018371956,297.2062128717569 1440,300 C 1440,300 1440,400 1440,400 Z"
                stroke="none" stroke-width="0" fill="#166974ff"
                class="transition-all duration-300 ease-in-out delay-150 path-2"></path>
        </svg>
        <section class="bg-main" id="footer">
            <h3 class="fw-bold font-poppins py-5 text-center text-white">Contact <span class="text-main2">Me</span>
            </h3>
            <div class="row justify-content-center">
                <div class="col-md-5 mb-3">
                    <form action="/pesan" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nama" required autocomplete="off"
                                placeholder="name@example.com">
                            <label for="nama" class="font-poppins">Nama</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                                required autocomplete="off">
                            <label for="floatingInput" class="font-poppins">Email</label>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text font-poppins " id="basic-addon1">+62</span>
                            <input type="number" class="form-control-lg form-control" aria-label="No HP"
                                aria-describedby="basic-addon1" required autocomplete="off">
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                style="height: 100px" required autocomplete="off"></textarea>
                            <label for="floatingTextarea2" class="font-poppins">Pesan Anda</label>
                        </div>
                        <button id="btn" class="mt-3" type="submit">
                            <div class="svg-wrapper-1">
                                <div class="svg-wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path fill="currentColor"
                                            d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <span>Send</span>
                        </button>
                    </form>
                </div>
                <div class="col-md-1 text-center">
                    <a href="https:/facebook.com/zinedine.ziddan.39" target="_blank"><img src="img/sosmed/facebook.png"
                            alt="facebook" class="img-fluid sosmed mb-3" width="70"></a>
                    <a href="https:/instagram.com/zine.zf" target="_blank"><img src="img/sosmed/instagram.png"
                            alt="facebook" class="img-fluid sosmed mb-3" width="70"></a>
                    <a href="https:/github.com/zinedine1210" target="_blank"><img src="img/sosmed/github.png"
                            alt="facebook" class="img-fluid sosmed mb-3" width="70"></a>
                    <a href="https:/wa.me/6289508781380?text=Hallo" target="_blank"><img src="img/sosmed/whatsapp.png"
                            alt="facebook" class="img-fluid sosmed mb-3" width="70"></a>
                </div>
            </div>

        </section>


        <div class="mb-4 bg-white text-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#166974" fill-opacity="1"
                    d="M0,64L0,160L288,160L288,288L576,288L576,192L864,192L864,96L1152,96L1152,192L1440,192L1440,0L1152,0L1152,0L864,0L864,0L576,0L576,0L288,0L288,0L0,0L0,0Z">
                </path>
            </svg>
            <img src="img/logo.png" alt="logo" class="img-fluid" width="70">
            <div class="font-poppins2 text-main">
                Copyright © 2022 Zinedine Ziddan Fahdlevy. All rights reserved.
            </div>
            <small class="font-poppins2 text-main">Made with <i class="fas fa-heart text-danger"></i> and <i
                    class="fas fa-mug-hot"></i></small>
        </div>
        {{-- akhir gelombang --}}
    </footer>

    <!-- Javascript -->

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/TextPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    {{-- JS Toastr --}}
    <script>
        @if (session()->has('berhasil'))
            toastr.success("{{ session('berhasil') }}")
        @endif

        @if (session()->has('gagal'))
            toastr.error("{{ session('gagal') }}")
        @endif

        @if (session()->has('login'))
            toastr.info("{{ session('login') }}")
        @endif
    </script>

    {{-- Sweet Alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    {{-- Script Lokal --}}
    <script src="../js/script.js"></script>

    <!-- Akhir Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
