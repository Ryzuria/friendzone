<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , maximum-scale=1.0">
    <title>F❤️Z Friend Gallery</title>
    <link rel="icon" href="../assets/images/Icon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/galleryv3.css">
    <link href="../css/navbar.css" rel="stylesheet">
    <script src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.1.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(window).load(function() {
        var key = 'hadModal',
            hadModal = localStorage.getItem(key);

        if (!hadModal) {
            $('#termofservice').modal('show');
        }
        $('#termofservice').on('submit', function(event) {
            localStorage.setItem(key, true);
        })
    });
    </script>
</head>

<body style="background-image: url(../assets/images/bg0v2.jpg);">

    <div class="content">
        <nav class="navbar navbar-expand-lg navbar-custom navbar-dark sticky-top"
            style="background-color: #73558b; width:100%;">
            <div class="container-fluid ">
                <a class="navbar-brand" href="../content/Main.php" style="width:15%" id="navIcon"><img
                        src="https://media.discordapp.net/attachments/608999097982255127/911546510418796564/LogoFZ4-edited.png?width=1440&height=410"
                        class="img-fluid" alt="img not found"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav  d-flex justify-content-end " style="width:100%;">
                        <li class="nav-item align-self-center">
                            <a class="nav-link active" href="ChooseFriend.php" style="vertical-align:middle;">Friend
                                Gallery</a>
                        </li>
                        <li class="nav-item align-self-center">
                            <a class="nav-link active" href="howto.php" style="vertical-align:middle;">How to use</a>
                        </li>
                        <li class="nav-item align-self-center">
                            <a class="nav-link active" href="about.php" style="vertical-align:middle;">About Us</a>
                        </li>
                        <li class="nav-item align-self-center">
                            <a class="nav-link active" href="https://www.facebook.com/sathidaCerSerZer"><img
                                    src="https://cdn-icons-png.flaticon.com/512/1400/1400843.png" width="50px"
                                    style="vertical-align:middle;"></a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <div class="modal fade" id="termofservice" tabindex="-1" aria-labelledby="termofservicelabel" aria-hidden="true"
            style="color:black; text-shadow: 0px 0px#ffffff;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="termofservicelabel">
                            <p class="h1">Term of service</p>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="">
                        <div class="modal-body">
                            <p class="h3">Please understand</p>
                            ผู้ใช้บริการรับทราบและยินยอมปฏิบัติตามนโยบายและข้อตกลงในการให้บริการของ friendzoneweb
                            ซึ่งบริหารงานโดย บริษัท analyzia group
                            ผู้ใช้บริการรับทราบและยินยอมปฏิบัติตามกฎระเบียบที่ออกโดย friendzoneweb
                            ซึ่งมีรายละเอียดดังนี้<br>
                            1. ทาง friendzone มีข้อกำหนดในการให้บริการดังนี้<br>
                            - การชวนไปแต่ละครั้งจะมีระยะเพียงแค่ 1 วัน ไม่มีค้างคืน<br>
                            - ต้องไม่มีเพศสัมพันธ์<br>
                            - ห้ามพาไปดื่มกินแฮลกอฮอล์และของมึนเมาต่างๆ<br>
                            - ห้ามทำสิ่งผิดกฎหมาย<br>
                            - ห้ามพาไปในสถานที่ที่ไม่เหมาะสม ลับหูลับตาคน ที่รโหฐาน<br>
                            2. ผู้ให้บริการขอสงวนสิทธิ์ที่จะบอกเลิกสัญญาโดยมิต้องแจ้งล่วงหน้า โดยไม่มีการคืนค่าบริการใดๆ
                            ทั้งสิ้น
                            ถ้าผู้ใช้บริการมีการกระทำที่ขัดต่อนโยบายการใช้บริการดังที่กล่าวมาข้างต้นผู้ให้บริการขอสงวนสิทธิ์ในการเป็นผู้พิจารณาว่าสิ่งที่ผู้ใช้บริการกระทำนั้นเป็นการผิดกฎระเบียบข้อบังคับหรือไม่<br>
                            3. ข้อมูลที่ผู้ใช้บริการให้กับผู้ให้บริการ ต้องเป็นข้อมูลที่เป็นจริงและถูกต้อง
                            หากผู้ใช้บริการป้อนข้อมูลไม่ถูกต้องหรือข้อมูลมั่วเข้ามา ผู้ให้บริการจะไม่จัดทำตามคำขอ<br>

                        </div>
                        <div class="modal-footer">
                            <a href="../index.php"><button type="button" class="btn btn-secondary">Close</button></a>
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Understand</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
        <div class="bg">
            <div class=" d-flex flex-row bd-highlight">
                <div class="leftbarname fontheader ">
                    <div class="inleftbarname container">
                        <div id="s" style="display: block;">
                            <p class="mgt mgl ">Name</p><br>
                        </div>
                        <div id="s1" style="display: none;">
                            <p class="mgt mgl">OkusoraShinshiro</p><br>
                        </div>
                        <div id="s2" style="display: none;">
                            <p class="mgt mgl">TeruTendo</p><br>
                        </div>
                        <div id="s3" style="display: none;">
                            <p class="mgt mgl">Smarty</p><br>
                        </div>
                        <div id="s4" style="display: none;">
                            <p class="mgt mgl">Folky</p><br>
                        </div>
                        <div id="s5" style="display: none;">
                            <p class="mgt mgl">Belle</p><br>
                        </div>
                        <div id="s6" style="display: none;">
                            <p class="mgt mgl">Jiwwy</p><br>
                        </div>
                        <div id="s7" style="display: none;">
                            <p class="mgt mgl">DangDa</p><br>
                        </div>
                        <div id="s8" style="display: none;">
                            <p class="mgt mgl">KieKra</p><br>
                        </div>
                        <div id="s9" style="display: none;">
                            <p class="mgt mgl">yyyyyyy9</p><br>
                        </div>
                        <div id="s10" style="display: none;">
                            <p class="mgt mgl">yyyyyyy10</p><br>
                        </div>
                        <div id="s11" style="display: none;">
                            <p class="mgt mgl">yyyyyyy11</p><br>
                        </div>

                    </div>
                </div>
                <div class="rightbarname fontheader">
                    <div id="n" style="display: block;">
                        <p class="positiontext mgt ">Name</p><br>
                    </div>
                    <div id="n1" style="display: none;">
                        <p class="positiontext mgt ">OkusoraShinshiro</p><br>
                    </div>
                    <div id="n2" style="display: none;">
                        <p class="positiontext mgt ">TeruTendo</p><br>
                    </div>
                    <div id="n3" style="display: none;">
                        <p class="positiontext mgt ">Smarty</p><br>
                    </div>
                    <div id="n4" style="display: none;">
                        <p class="positiontext mgt ">Folky</p><br>
                    </div>
                    <div id="n5" style="display: none;">
                        <p class="positiontext mgt ">Belle</p><br>
                    </div>
                    <div id="n6" style="display: none;">
                        <p class="positiontext mgt ">Jiwwy</p><br>
                    </div>
                    <div id="n7" style="display: none;">
                        <p class="positiontext mgt ">DangDa</p><br>
                    </div>
                    <div id="n8" style="display: none;">
                        <p class="positiontext mgt ">KieKra</p><br>
                    </div>
                    <div id="n9" style="display: none;">
                        <p class="positiontext mgt ">XXXXXXXXXXXX9</p><br>
                    </div>
                    <div id="n10" style="display: none;">
                        <p class="positiontext mgt ">XXXXXXXXXXXX10</p><br>
                    </div>
                    <div id="n11" style="display: none;">
                        <p class="positiontext mgt ">XXXXXXXXXXXX11</p><br>
                    </div>

                </div>
            </div>
            <div class="divmain d-flex flex-row bd-highlight">
                <div class="divleft p-1">
                    <div class="detail container fontdetail">
                        <div id="d" style="display: block;">
                            <p class="mgl">Detail
                            </p>
                        </div>
                        <div id="d1" style="display: none;">
                            <p class="mgl">15 years old, born on July 26th, which is the first arcade version of The
                                Idolmaster working day among all the Idolmaster idols.
                            </p>
                        </div>
                        <div id="d2" style="display: none;">
                            <p class="mgl">Teru is a former lawyer. Ever since he was little, he's yearned to be a hero
                                with a strong sense of justice who would never abandon a person in need.
                            </p>
                        </div>
                        <div id="d3" style="display: none;">
                            <p class="mgl"> ชายผู้อยู่เหนือชายทั้งปวง
                                <br> ฉายาของเขาก็คือ ใจเกเร
                            </p>
                        </div>
                        <div id="d4" style="display: none;">
                            <p class="mgl">เป็นผู้ชายที่สามารถยิง X-Burner ในร้านเหล้าได้
                                <br>
                            </p>
                        </div>
                        <div id="d5" style="display: none;">
                            <p class="mgl">สุดยอดเลเยอร์ที่รวยที่สุดในจักรวาล
                                <br>พร้อมไปกับคุณแล้ววันนี้
                            </p>
                        </div>
                        <div id="d6" style="display: none;">
                            <p class="mgl">ชายผู้เงียบขรีม ไม่มีใครรู้ว่าเค้าคิดอะไรอยู่
                                <br>แต่มันช่างน่าค้นหาและมีเสน่ห์
                            </p>
                        </div>
                        <div id="d7" style="display: none;">
                            <p class="mgl">ไอน์สไตน์กลับชาติมาเกิด
                                <br>อัจริยะที่มาพร้อมกับพลังอันยิ่งใหญ่กับความรับผิดชอบที่ใหญ่ยิ่ง
                            </p>
                        </div>
                        <div id="d8" style="display: none;">
                            <p class="mgl">เด็กหนุ่มขี้เหงา
                                <br>ผู้ที่ใช้นิ้วได้อย่างชำนาญ ขอแค่เป็นเรื่องที่เกี่ยวกับนิ้วบอกเขาได้หมด
                            </p>
                        </div>
                        <div id="d9" style="display: none;">
                            <p class="mgl">9xxxxxxxxxxxxxxxx99xxxxxxxxxxxxxxxxxxxxxx
                                <br>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                            </p>
                        </div>
                        <div id="d10" style="display: none;">
                            <p class="mgl">10xxxxxxxxxxxxxxx1010xxxxxxxxxxxxxxxxxxxxxxx
                                <br>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                            </p>
                        </div>
                        <div id="d11" style="display: none;">
                            <p class="mgl">11xxxxxxxxxxxxxxx1111xxxxxxxxxxxxxxxxxxxxxxx
                                <br>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                            </p>
                        </div>

                    </div>
                    <section>
                        <div class="friend container ">
                            <div class="d-flex flex-wrap align-content-start mgl">
                                <div class="blockimg m-2" onclick="replace('c1','s1','n1','d1','bt1','v1')"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="C1">
                                    <img src="../assets/images/MiniChara02.png" alt="" class="imgcha">
                                </div>
                                <div class="blockimg m-2" onclick="replace('c2','s2','n2','d2','bt2','v2')"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="C2">
                                    <img src="../assets/images/MiniChara01.png" alt="" class="imgcha">
                                </div>
                                <div class="blockimg m-2" onclick="replace('c3','s3','n3','d3','bt3','v3')"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="C3">
                                    <img src="../assets/images/tieCC.gif" alt="" class="imgcha">
                                </div>
                                <div class="blockimg m-2" onclick="replace('c4','s4','n4','d4','bt4','v4')"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="C4">
                                    <img style="border-style: solid;border-color:#73558b;border-width: 0.1vw;"
                                        src="../assets/images/fgc.gif" alt="" class="imgcha">
                                </div>
                                <div class="blockimg m-2" onclick="replace('c5','s5','n5','d5','bt5','v5')"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="C5">
                                    <img src="../assets/images/MiniBelle.png" alt="" class="imgcha">
                                </div>
                                <div class="blockimg m-2" onclick="replace('c6','s6','n6','d6','bt6','v6')"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="C6">
                                    <img src="../assets/images/jiwmin.png" alt="" class="imgcha">
                                </div>
                                <div class="blockimg m-2" onclick="replace('c7','s7','n7','d7','bt7','v7')"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="C7">
                                    <img src="../assets/images/dangda-min.png" alt="" class="imgcha">
                                </div>
                                <div class="blockimg m-2" onclick="replace('c8','s8','n8','d8','bt8','v8')"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="C8">
                                    <img src="../assets/images/kra-min.png" alt="" class="imgcha">
                                </div>
                                <div class="blockimg m-2" onclick="replace('c9','s9','n9','d9','bt9','v9')"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="C9">
                                    <img src="../assets/images/MiniCharaGeneral.png" alt="" class="imgcha">
                                </div>
                                <div class="blockimg m-2" onclick="replace('c10','s10','n10','d10','bt10','v10')"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="C10">
                                    <img src="../assets/images/MiniCharaGeneral.png" alt="" class="imgcha">
                                </div>
                                <div class="blockimg m-2" onclick="replace('c11','s11','n11','d11','bt11','v11')"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="C11">
                                    <img src="../assets/images/MiniCharaGeneral.png" alt="" class="imgcha">
                                </div>
                                <div class="blockimg m-2" onclick="replace('c','s','n','d','bt','v')"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Cd">
                                    <img src="../assets/images/MiniCharaGeneral.png" alt="" class="imgcha">
                                </div>


                            </div>

                        </div>
                    </section>
                </div>
                <div class="divright p-2 ">
                    <div id="c" class="imgC mgl" style="display: block;">
                        <img src="../assets/images/CharaGeneral.png" alt="" class="imgFull">
                    </div>
                    <div id="c1" class="imgC mgl" style="display: none;">
                        <img src="../assets/images/Chara02.png" alt="" class="imgFull">
                    </div>
                    <div id="c2" class="imgC mgl" style="display: none;">
                        <img src="../assets/images/Chara01.png" alt="" class="imgFull">
                    </div>
                    <div id="c3" class="imgC mgl" style="display: none;">
                        <img src="../assets/images/tieg.gif" alt="" class="imgFull">
                    </div>
                    <div id="c4" class="imgC mgl" style="display: none;">
                        <img src="../assets/images/fgu1.gif" alt="" class="imgFull">
                    </div>
                    <div id="c5" class="imgC mgl" style="display: none;">
                        <img src="../assets/images/Belle1.png" alt="" class="imgFull">
                    </div>
                    <div id="c6" class="imgC mgl" style="display: none;">
                        <img src="../assets/images/jiw.png" alt="" class="imgFull">
                    </div>
                    <div id="c7" class="imgC mgl" style="display: none;">
                        <img src="../assets/images/dangda.png" alt="" class="imgFull">
                    </div>
                    <div id="c8" class="imgC mgl" style="display: none;">
                        <img src="../assets/images/kra.png" alt="" class="imgFull">
                    </div>
                    <div id="c9" class="imgC mgl" style="display: none;">
                        <img src="../assets/images/CharaGeneral.png" alt="" class="imgFull">
                    </div>
                    <div id="c10" class="imgC mgl" style="display: none;">
                        <img src="../assets/images/CharaGeneral.png" alt="" class="imgFull">
                    </div>
                    <div id="c11" class="imgC mgl" style="display: none;">
                        <img src="../assets/images/CharaGeneral.png" alt="" class="imgFull">
                    </div>

                    <!-- <div class="btSelect container"></div> -->
                </div>
            </div>

            <div class="view ">
                <div id="v" class="container btimg" style="display: block;">
                    <a href="view.php?FRIENDS=<?php echo "Jar" ?>" target="blank"><img class="imgbtn "
                            src="../assets/images/Viewlist.png" alt=""></a>
                </div>
                <div id="v1" class="container btimg" style="display: none;">
                    <a href="view.php?FRIENDS=<?php echo "OkusoraShinshiro" ?>" target="blank"><img class="imgbtn "
                            src="../assets/images/Viewlist.png" alt=""></a>
                </div>
                <div id="v2" class="container btimg" style="display: none;">
                    <a href="view.php?FRIENDS=<?php echo "TeruTendo" ?>" target="blank"><img class="imgbtn "
                            src="../assets/images/Viewlist.png" alt=""></a>
                </div>
                <div id="v3" class="container btimg" style="display: none;">
                    <a href="view.php?FRIENDS=<?php echo "Smarty" ?>" target="blank"><img class="imgbtn "
                            src="../assets/images/Viewlist.png" alt=""></a>
                </div>
                <div id="v4" class="container btimg" style="display: none;">
                    <a href="view.php?FRIENDS=<?php echo "Folky" ?>" target="blank"><img class="imgbtn "
                            src="../assets/images/Viewlist.png" alt=""></a>
                </div>
                <div id="v5" class="container btimg" style="display: none;">
                    <a href="view.php?FRIENDS=<?php echo "Belle" ?>" target="blank"><img class="imgbtn "
                            src="../assets/images/Viewlist.png" alt=""></a>
                </div>
                <div id="v6" class="container btimg" style="display: none;">
                    <a href="view.php?FRIENDS=<?php echo "Jiwwy" ?>" target="blank"><img class="imgbtn "
                            src="../assets/images/Viewlist.png" alt=""></a>
                </div>
                <div id="v7" class="container btimg" style="display: none;">
                    <a href="view.php?FRIENDS=<?php echo "Dangda" ?>" target="blank"><img class="imgbtn "
                            src="../assets/images/Viewlist.png" alt=""></a>
                </div>
                <div id="v8" class="container btimg" style="display: none;">
                    <a href="view.php?FRIENDS=<?php echo "KieKra" ?>" target="blank"><img class="imgbtn "
                            src="../assets/images/Viewlist.png" alt=""></a>
                </div>
                <div id="v9" class="container btimg" style="display: none;">
                    <a href="view.php?FRIENDS=<?php echo "9" ?>" target="blank"><img class="imgbtn "
                            src="../assets/images/Viewlist.png" alt=""></a>
                </div>
                <div id="v10" class="container btimg" style="display: none;">
                    <a href="view.php?FRIENDS=<?php echo "10" ?>" target="blank"><img class="imgbtn "
                            src="../assets/images/Viewlist.png" alt=""></a>
                </div>
                <div id="v11" class="container btimg" style="display: none;">
                    <a href="view.php?FRIENDS=<?php echo "11" ?>" target="blank"><img class="imgbtn "
                            src="../assets/images/Viewlist.png" alt=""></a>
                </div>
            </div>

            <div class="confirm ">
                <div id="bt" class="container btimg" style="display: block;">
                    <a href="queue.php?FRIENDS=<?php echo "0" ?>"><img class="imgbtn "
                            src="../assets/images/MakeFButton.png" alt=""></a>
                </div>
                <div id="bt1" class="container btimg" style="display: none;">
                    <a href="queue.php?FRIENDS=<?php echo "OkusoraShinshiro" ?>"><img class="imgbtn "
                            src="../assets/images/MakeFButton.png" alt=""></a>
                </div>
                <div id="bt2" class="container btimg" style="display: none;">
                    <a href="queue.php?FRIENDS=<?php echo "TeruTendo" ?>"><img class="imgbtn "
                            src="../assets/images/MakeFButton.png" alt=""></a>
                </div>
                <div id="bt3" class="container btimg" style="display: none;">
                    <a href="queue.php?FRIENDS=<?php echo "Smarty" ?>"><img class="imgbtn "
                            src="../assets/images/MakeFButton.png" alt=""></a>
                </div>
                <div id="bt4" class="container btimg" style="display: none;">
                    <a href="queue.php?FRIENDS=<?php echo "Folky" ?>"><img class="imgbtn "
                            src="../assets/images/MakeFButton.png" alt=""></a>
                </div>
                <div id="bt5" class="container btimg" style="display: none;">
                    <a href="queue.php?FRIENDS=<?php echo "Belle" ?>"><img class="imgbtn "
                            src="../assets/images/MakeFButton.png" alt=""></a>
                </div>
                <div id="bt6" class="container btimg" style="display: none;">
                    <a href="queue.php?FRIENDS=<?php echo "Jiwwy" ?>"><img class="imgbtn "
                            src="../assets/images/MakeFButton.png" alt=""></a>
                </div>
                <div id="bt7" class="container btimg" style="display: none;">
                    <a href="queue.php?FRIENDS=<?php echo "Dangda" ?>"><img class="imgbtn "
                            src="../assets/images/MakeFButton.png" alt=""></a>
                </div>
                <div id="bt8" class="container btimg" style="display: none;">
                    <a href="queue.php?FRIENDS=<?php echo "KieKra" ?>"><img class="imgbtn "
                            src="../assets/images/MakeFButton.png" alt=""></a>
                </div>
                <div id="bt9" class="container btimg" style="display: none;">
                    <a href="queue.php?FRIENDS=<?php echo "9" ?>"><img class="imgbtn "
                            src="../assets/images/MakeFButton.png" alt=""></a>
                </div>
                <div id="bt10" class="container btimg" style="display: none;">
                    <a href="queue.php?FRIENDS=<?php echo "10" ?>"><img class="imgbtn "
                            src="../assets/images/MakeFButton.png" alt=""></a>
                </div>
                <div id="bt11" class="container btimg" style="display: none;">
                    <a href="queue.php?FRIENDS=<?php echo "11" ?>"><img class="imgbtn "
                            src="../assets/images/MakeFButton.png" alt=""></a>
                </div>
            </div>

        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
        </script>
        <script src="../js/choose.js"></script>

</body>

</html>