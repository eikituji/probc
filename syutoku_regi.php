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
            <h1 class="display-4 fst-italic">拾得物登録</h1>
    </div>
    <div>
        <h2>拾得物の登録をしてください</h2>
    </div>
    <div class="row mt-3">
            <div class="col card m-1">
                <div class="card-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">学籍番号</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="c1p10000">
                </div>
                </div>
            <div class="col card m-1">
                <div class="card-body">
                <h5 class="card-title">拾得物の色を選択してください</h5>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>色を選択</option>
                        <option value="1">白</option>
                        <option value="2">黒</option>
                        <option value="3">灰色</option>
                        <option value="4">赤</option>
                        <option value="5">青</option>
                        <option value="6">緑</option>
                        <option value="7">黄</option>
                        <option value="8">橙</option>
                        <option value="9">桃</option>
                        <option value="10">紫</option>
                        <option value="11">茶</option>
                        <option value="12">金</option>
                        <option value="13">銀</option>
                    </select>
                </div>
            </div>
    </div>
    <div class="row mt-3">
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
        </div>
    </div>
    <div class="row mt-3">
        <div class="col card m-1">
                <div class="card-body">
                <div class="mb-3">
                    <label for="formFile" class="form-label">写真を選択してください</label>
                    <input class="form-control" type="file" id="formFile">
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
        <button type="submit" class="　col-md-4　btn btn-primary">登録する</button>
    </div>
    <?php include("html/footer.html"); ?>
</body>
</html>