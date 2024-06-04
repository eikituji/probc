<!doctype html>
<html lang="ja">
<head>
    <?php include("html/meta.html"); ?>
<title>拾得物管理システム</title>
</head>
<body>
<?php include("html/header.html"); ?>
    <div class="container">
    <div class="bg-primary text-white p-5 mt-3 rounded text-center">
            <h1 class="display-4 fst-italic">遺失物検索</h1>
    </div>
    <div>
        <h2>１つ以上入力してください</h2>
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
                        <label for="exampleFormControlInput1" class="form-label">場所</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="1101教室">
                    </div>
                </div>
            </div>  
    <div class="col card m-1">
            <div class="card-body">
                <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">特徴を入力してください</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="黒いリュック">
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
        <button type="submit" class="　col-md-4　btn btn-primary">登録する</button>
    </div>
<?php include("html/footer.html"); ?>
</body>
</html>