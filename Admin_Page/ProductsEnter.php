<?php 
    require '../Headers/HeaderAdminPage.php';
?>
        <main id="main">
            <section class="header"> 
                <div class="container-fluid">
                    <h1 class="display-1"> Welcome </h1> <!--section of welcome go up and the next section on z-index: 4 on him.-->
                </div>
                <div class="container" style="text-align: center;">
                    <div class="row">
                        <div class="col col-button">
                            <button class="btn btn-link btn-block arrow-button" type="button" onclick="ScrollPage()">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                    </div>
                </div> 
            </section>
            <section id="main-Overview hero">
                <nav class="navbar navbar-expand-lg navbar-light" style="width: 100% !important; height: 60px; padding: 10px; position: relative; z-index: 2; box-shadow: 0px 1px 14px -4px black; border-top: 1px #c7c7c7 solid; border-bottom: 1px #cacaca solid;">
                    <div class="container-fluid">
                        <a class="navbar-brand"><i class="far fa-user"></i> <?=$_SESSION["userName"]?> </a>
                        <div class="justify-content-end">
                            <ul class="navbar-nav">
                                <li class="nav-item" role="presentation"><a class="nav-link" href="admin_page.php">Overview</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="liveUsers.php">Live Users</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="AdminEdit.php">Edit</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="EditUsers.php">EditUsers</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link disabled">EnterProduct</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </section>
            <div class="spacer" style="height: 20px; width: 100%;">
            </div>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="d-flex justify-content-center">Edit Products Zone</h1>
                            <p class="d-flex align-items-center justify-content-center">Here are you can change/enter details about kind of the products.</p>
                            <p class="d-flex align-items-center justify-content-center">Enter the all fields for change the propertie.</p>
                            <?php 
                                if(isset($_GET["error"])){
                                    echo '<p class="message" style="color: red; font-size: 1.6rem;">Something not working Admin! Check the code please.</p>';
                                }
                                elseif(isset($_GET["succees"])){                                            
                                    echo '<p class="message" style="color: green; font-size: 1.6rem;">The Product entered in the prodducts database!</p>';
                                }
                            ?>
                            <div class="card">
                                <div class="d-flex justify-content-center">
                                    <form action="includes/EnterProducts.php" method="POST">
                                        <div class="form-group">
                                            <label for="inputState">Kind Of Product</label>
                                            <input type="text" class="form-control" id="inputState" name="pKin" placeholder="Enter... smartphone/N/F">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputState">Name Of Company</label>
                                            <input type="text" class="form-control" id="inputState" name="pCom" placeholder="Enter the name company of the product">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">Name Of The Product</label>
                                            <input type="text" class="form-control" id="inputname" name="pName" placeholder="Enter like 'GalaxyS8'/'iPhoneX'">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">Colors Of The Product</label>
                                            <input type="text" class="form-control" id="inputname" name="colorp" placeholder="Enter colors...">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">Storage options Of The Product</label>
                                            <input type="text" class="form-control" id="inputname" name="pStor" placeholder="Enter like '64GB'">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">Memory options Of The Product</label>
                                            <input type="text" class="form-control" id="inputname" name="pMemOp" placeholder="Enter like '64GB'">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">Memory Type Of The Product</label>
                                            <input type="text" class="form-control" id="inputname" name="pMemTy" placeholder="Enter like '64GB'">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">Is the Product Resistan to Water?</label>
                                            <input type="text" class="form-control" id="inputname" name="pResOp" placeholder="Enter...yes/no">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">For how long the phone Resistan to Water?</label>
                                            <input type="text" class="form-control" id="inputname" name="pResTm" placeholder="If yes, descripe. If not, don't write anything.">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">What's the display size?</label>
                                            <input type="text" class="form-control" id="inputname" name="pDispSize" placeholder="Enter...">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">What's the display pixels?</label>
                                            <input type="text" class="form-control" id="inputname" name="pDispPix" placeholder="Enter...">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">What's the display type?</label>
                                            <input type="text" class="form-control" id="inputname" name="pDispTy" placeholder="Enter...">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">What's the materials that the phone builted on?</label>
                                            <input type="text" class="form-control" id="inputname" name="pMater" placeholder="Enter..">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">What's the CPU of the product?</label>
                                            <input type="text" class="form-control" id="inputname" name="pCPU" placeholder="Enter..">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">What's the WIFI option?</label>
                                            <input type="text" class="form-control" id="inputname" name="pWifOp" placeholder="Enter... descripe">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">What's the Bluetooth option?</label>
                                            <input type="text" class="form-control" id="inputname" name="pBluOp" placeholder="Enter... descripe">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">What's the GPS option?</label>
                                            <input type="text" class="form-control" id="inputname" name="pGPSOp" placeholder="Enter... descripe">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">What's the NFC option?</label>
                                            <input type="text" class="form-control" id="inputname" name="pNFCOp" placeholder="Enter... Yes/No">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">What's the RADIO option?</label>
                                            <input type="text" class="form-control" id="inputname" name="pRADOp" placeholder="Enter... Yes/No">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">What's in the Rear Camera?</label>
                                            <input type="text" class="form-control" id="inputname" name="pReCam" placeholder="Enter... descripe">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">Has in the Rear Camera Wide Camera?</label>
                                            <input type="text" class="form-control" id="inputname" name="pReCamWid" placeholder="Enter... descripe">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">Has in the Rear Camera Zoom Camera?</label>
                                            <input type="text" class="form-control" id="inputname" name="pReCamZo" placeholder="Enter... descripe">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">Is the Night Mode accessable?</label>
                                            <input type="text" class="form-control" id="inputname" name="pNightAcc" placeholder="Enter... descripe">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">What's in the Front Camera?</label>
                                            <input type="text" class="form-control" id="inputname" name="pFrCam" placeholder="Enter... descripe">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">Has in the Front Camera Wide Camera?</label>
                                            <input type="text" class="form-control" id="inputname" name="pFrCamW" placeholder="Enter... descripe">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">What's the Video Camera of the Rear Camera?</label>
                                            <input type="text" class="form-control" id="inputname" name="pVCReCam" placeholder="Enter... descripe">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">What's the Video Camera of the Front Camera?</label>
                                            <input type="text" class="form-control" id="inputname" name="pVCFrCam" placeholder="Enter... descripe">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">Is the product accetable with slomostation Video?</label>
                                            <input type="text" class="form-control" id="inputname" name="pSLOMOVD" placeholder="Enter... descripe">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">What's the Security in the product?</label>
                                            <input type="text" class="form-control" id="inputname" name="pinSec" placeholder="Enter... descripe">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">What's the Security the product has?</label>
                                            <input type="text" class="form-control" id="inputname" name="pSec" placeholder="Enter... descripe">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">What's the Features the prodcut has?</label>
                                            <input type="text" class="form-control" id="inputname" name="pFeat" placeholder="Enter... descripe">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">What's the Extrenal Buttons and Connectors at the product?</label>
                                            <input type="text" class="form-control" id="inputname" name="pEBC" placeholder="Enter... descripe">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">What's the Battery size of the product?</label>
                                            <input type="text" class="form-control" id="inputname" name="pBatty" placeholder="Enter... descripe">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">Is the product has Fast Charging?</label>
                                            <input type="text" class="form-control" id="inputname" name="pFC" placeholder="Enter... descripe">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">What's the time the battery stay able?</label>
                                            <input type="text" class="form-control" id="inputname" name="pBattyTime" placeholder="Enter... descripe">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">Which Sim/Extrenal Storage can be in the product?</label>
                                            <input type="text" class="form-control" id="inputname" name="pS/EXst" placeholder="Enter... descripe">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">What's the System of the product?</label>
                                            <input type="text" class="form-control" id="inputname" name="pOS" placeholder="Enter... descripe">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">What's the Accessibility of the product?</label>
                                            <input type="text" class="form-control" id="inputname" name="pAccess" placeholder="Enter... descripe">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">What's the Original URL of the product?</label>
                                            <input type="text" class="form-control" id="inputname" name="pURL" placeholder="Enter... descripe">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputname">What's the popularitiy of the product?</label>
                                            <input type="text" class="form-control" id="inputname" name="pRate" placeholder="Enter... descripe">
                                        </div>
                                        <button type="submit" class="btn btn-secondary col-sm-12" value="insert" name="enterdetail-submit">submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<?php
    require '../Footer.php';
?>