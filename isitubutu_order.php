<!DOCTYPE html>
<html lang="en">
<head>
<?php include("html/meta.html"); ?>
<title>拾得物管理システム</title>
</head>
<body>
    <?php include("html/header.html"); ?>
    <div class="container">
    <div class="bg-primary text-white p-5 mt-3 rounded text-center">
            <h1 class="display-4 fst-italic">遺失物捜索依頼</h1>
    </div>
    <div>
        <h2>遺失物の情報を入力してください</h2>
    </div>
    <div class="col card m-1">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">学籍番号</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="c1p10000">
                    </div>
                </div>
    </div>
    <div class="col card m-1">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">電話番号  (ハイフン不要)</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="0901112222">
                    </div>
                </div>
    </div>    
    <div class="col card m-1">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">メールアドレス  </label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name_example@bunkyo.ac.jp">
                    </div>
                </div>
    </div> 
    <div class="col card m-1">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">遺失物  </label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="リュック">
                    </div>
                </div>
    </div>     
    <div class="col card m-1">
                <div class="card-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">日時  (年,月,日,時間のように記入してください)</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="2024,01,25,1235">
                </div>
                </div>
            </div>
    <div class="col card m-1">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">拾得場所</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="1101教室">
                    </div>
                </div>
            </div>
    <div class="col card m-1">   
        <button type="submit" class="　col-md-4　btn btn-primary">登録する</button>
    </div>
    <?php include("html/footer.html"); ?>
</body>
</html>