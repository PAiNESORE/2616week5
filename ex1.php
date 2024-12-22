<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- เพิ่มฟอนต์และกำหนดฟอนต์ -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=IBM+Plex+Sans+Thai:wght@100;200;300;400;500;600;700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mitr:wght@200;300;400;500;600;700&family=Noto+Sans+Thai:wght@100..900&family=Pattaya&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Trirong:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: "IBM Plex Sans Thai", serif;
            font-weight: 400;
            font-style: normal;
            margin-left: 100px;
            margin-right: 100px;
            margin-top: 25px;
            margin-bottom: 40px;
        }
    </style>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ใช้งาน Bootstrap</title>
</head>

<body>
    <center><h1>ทดสอบการใช้งาน Bootstrap</h1></center>
    พัฒนาโดย 653485016 นายพีรพัฒน์ ทองมี <br>
    หมู่เรียน 26.16 <br><br>

    <div class="alert alert-success">
        <strong>ยินดีด้วย!</strong> คุณสามารถใช้งาน Bootstrap ได้แล้ว
    </div>
    <br>
    <center>
        <button type="button" class="btn btn-primary">บันทึกข้อมูล</button>
        <button type="button" class="btn btn-danger">ยกเลิกการบันทึก</button>
    </center>
    <br>
    <center>
        <button type="button" class="btn btn-outline-primary">บันทึกข้อมูล</button>
        <button type="button" class="btn btn-outline-danger">ยกเลิกการบันทึก</button>
    </center>
    <br><br>
    <div class="card" style="width:40%">
        <img class="card-img-top" src="Me.jpg" alt="รูปตัวเอง">
        <div class="card-body">
            <h4 class="card-title">นายพีรพัฒน์ ทองมี</h4>
            <p class="card-text"><b>คติประจำใจ</b> ความพยายามอยู่ที่ไหน ความพยายามอยู่ที่นั่น</p>
            <align-<a href="http://npru.ac.th" class="btn btn-outline-primary">ดูเพิ่มเติม</a>
        </div>
    </div>
    <br><br>
    กิจกรรมที่ชอบ : <br><br>
    <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
            เลือกกิจกรรมที่ชอบ
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">ทำอาหาร</a></li>
            <li><a class="dropdown-item" href="#">เล่นเกม</a></li>
            <li><a class="dropdown-item" href="#">ฟังเพลง</a></li>
        </ul>
    </div>

</body>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>