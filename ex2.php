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
        h1 {
            font-family: "IBM Plex Sans Thai", serif;
            font-weight: 600;
            font-style: normal;
            font-size: 35px;

        }

        body {
            font-family: "IBM Plex Sans Thai", serif;
            font-weight: 400;
            font-style: normal;
            margin-left: 200px;
            margin-right: 200px;
            margin-top: 40px;
            margin-bottom: 40px;

        }
    </style>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ใช้งาน Bootstrap</title>
</head>

<body>
    <center>
        <h1>โปรแกรมบันทึกข้อมูล</h1>
    </center><br><br>

    <form class="row g-3">
        <div class="mb-3">
            <label for="formFile" class="form-label">เลือกรูปภาพประจำตัว</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">หมายเลขประจำตัวข้าราชการ</label>
            <input type="text" class="form-control" id="inputEmail4"
                placeholder="ไม่ต้องเว้นวรรค">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">หมายเลขบัตรประจำตัวประชาชน</label>
            <input type="text" class="form-control" id="inputPassword4"
                placeholder="ไม่ต้องเว้นวรรค">
        </div>
        <div class="col-md-2">
            <label for="inputAddress" class="form-label">คำนำหน้าชื่อ</label>
            <select id="inputState" class="form-select">
                <option selected>กรุณาเลือก</option>
                <option>นาย</option>
                <option>นาง</option>
                <option>นางสาว</option>
            </select>
        </div>
        <div class="col-md-5">
            <label for="inputAddress2" class="form-label">ชื่อ</label>
            <input type="text" class="form-control" id="inputAddress2">
        </div>
        <div class="col-md-5">
            <label for="inputAddress2" class="form-label">นามสกุล</label>
            <input type="text" class="form-control" id="inputAddress2">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">ตำแหน่งปัจจุบัน</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">สังกัด (กอง/สำนัก)</label>
            <select id="inputState" class="form-select">
                <option selected>กรุณาเลือก</option>
                <option>สำนักปลัดเทศบาล</option>
                <option>กองคลัง</option>
                <option>กองช่าง</option>
                <option>กองสวัสดิการสังคม</option>
                <option>กองการศึกษา</option>
                <option>กองการเจ้าหน้าที่</option>
                <option>กองสาธารณสุขและสิ่งแวดล้อม</option>
                <option>กองยุทธศาสตร์และงบประมาณ</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="inputZip" class="form-label">วันที่บรรจุ</label>
            <input type="date" class="form-control" id="inputZip">
        </div>
        <div class="col-md-4">
            <label for="inputZip" class="form-label">เงินเดือนปัจจุบัน</label>
            <input type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-md-4">
            <label for="inputZip" class="form-label">หมายเลขโทรศัพท์</label>
            <input type="text" class="form-control" id="inputZip">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">รายละเอียดเพิ่มเติม</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        </div>
        <div class="col-12">
            <center>
                <button type="submit" class="btn btn-primary">บันทึก</button>
                <button type="submit" class="btn btn-danger">ยกเลิก</button>
        </div>
        </center>

    </form>


</body>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>