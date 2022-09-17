<?php
if(isset($_POST["enterdetail-submit"])){
    require '../../Server/data.php';
    
    $kindP = $_POST["pKin"];
    $CompanyP = $_POST["pCom"];
    $NameP = $_POST["pName"];
    $ColorP = $_POST["colorp"];
    $StorageP = $_POST["pStor"];
    $MemoryopP = $_POST["pMemOp"];
    $MemorytyP = $_POST["pMemTy"];
    $ResistanWatP = $_POST["pResOp"];
    $ResistanWatimeP = $_POST["pResTm"];
    $DisplaySizeP = $_POST["pDispSize"];
    $DisplayPixP = $_POST["pDispPix"];
    $DisplayTypeP = $_POST["pDispTy"];
    $MaterialsP = $_POST["pMater"];
    $CPUP = $_POST["pCPU"];
    $WifiopP = $_POST["pWifOp"];
    $BluetoothopP = $_POST["pBluOp"];
    $GPSopP = $_POST["pGPSOp"];
    $NFCopP = $_POST["pNFCOp"];
    $RADIOopP = $_POST["pRADOp"];
    $RearCamP = $_POST["pReCam"];
    $RearCamWideP = $_POST["pReCamWid"];
    $RearCamZoomP = $_POST["pReCamZo"];
    $NightModeP = $_POST["pNightAcc"];
    $FrontCamP = $_POST["pFrCam"];
    $FrontCamWideP = $_POST["pFrCamW"];
    $VCRearCamP = $_POST["pVCReCam"];
    $VCFrontCamP = $_POST["pVCFrCam"];
    $SlomoVDP = $_POST["pSLOMOVD"];
    $SecurityinP = $_POST["pinSec"];
    $SecurityatP = $_POST["pSec"];
    $FeaturesP = $_POST["pFeat"];
    $ExButtConnP = $_POST["pEBC"];
    $BattarySizeP = $_POST["pBatty"];
    $FastChargeP = $_POST["pFC"];
    $BattaryStayTimeP = $_POST["pBattyTime"];
    $SimExtraStorP = $_POST["pS/EXst"];
    $SystemP = $_POST["pOS"];
    $AccessP = $_POST["pAccess"];
    $URLP = $_POST["pURL"];
    $RatingP = $_POST["pRate"];

    $SQL = "INSERT INTO products (KindProduct, CompName, NameProduct, 
    color, StoragePro, MemorySize, MemoryType, Resistan_toWater, ResistanWater_time,
    Display_size, Display_px, Display_type, Materials, CPU, Wifi, Bluetooth,
    GPS, NFC, Radio, rCamera, rWCamera, rZCamera, Night_Camera, fCamera, fWCamera,
    VRCameraRecording, VFCameraRecording, sLomoStaionCamera, SecurityinPhone, SecurityatPhone, Features,
    ExtrenalBAC, Battery, FastCharge, TimestayBattery, Sim, SystemPhone, Accessibility,
    URLPhone, Rating) VALUES ('$kindP', '$CompanyP', '$NameP', '$ColorP', '$StorageP', '$MemoryopP', '$MemorytyP', 
    '$ResistanWatP', '$ResistanWatimeP', '$DisplaySizeP', '$DisplayPixP', '$DisplayTypeP', '$MaterialsP',
    '$CPUP', '$WifiopP', '$BluetoothopP', '$GPSopP', '$NFCopP', '$RADIOopP',
    '$RearCamP', '$RearCamWideP', '$RearCamZoomP', '$NightModeP', '$FrontCamP', '$FrontCamWideP', '$VCRearCamP',
    '$VCFrontCamP', '$SlomoVDP', '$SecurityinP', '$SecurityatP','$FeaturesP', '$ExButtConnP', '$BattarySizeP', '$FastChargeP', '$BattaryStayTimeP',
    '$SimExtraStorP', '$SystemP', '$AccessP', '$URLP', '$RatingP')";

if(mysqli_query($conn, $SQL)){
    header("Location: ../ProductsEnter.php?success");
    exit();
}

else{
    header("Location: ../ProductsEnter.php?error");
}
}