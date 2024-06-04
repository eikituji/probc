<!doctype html>
<html lang="ja">
<head>
    <?php include("html/meta.html"); ?>
<title>拾得物管理システム</title>
</head>
<body>
    <?php include("html/header.html"); ?>
    <div class="container">
        <div class="bg-primary text-white p-5 mt-3 rounded">
            <h1 class="display-4 fst-italic">拾得物管理システム</h1>
            <hr>
            <p>このシステムは拾得物の登録と検索を支援するために設計されています。ユーザーは拾得物を登録したり、遺失物の検索依頼を行うことができます。</p>
        </div>
        <div class="row mt-3">
            <div class="col card m-1">
                <div class="card-body">
                <h5 class="card-title">拾得者（ユーザ）登録</h5>
                <hr>
                <p class=“card-text”>
                拾得物の登録を行う上で必要となるユーザの情報を登録するための機能です
                </p>
                <a href="#" class="btn btn-primary">登録する</a>
                </div>
            </div>
            <div class="col card m-1">
                    <div class="card-body">
                    <h5 class="card-title">拾得物登録</h5>
                    <hr>
                    <p class=“card-text”>
                    拾得物物が発生した時に、拾得物の情報をシステムに登録するための機能です。
                    </p>
                    <a href="syutoku_regi.php" class="btn btn-primary">登録する</a>
                    </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col card m-1">
                <div class="card-body">
                <h5 class="card-title">拾得物検索機能</h5>
                <hr>
                <p class=“card-text”>
                システムに登録されている拾得物のデータを対象として検索するための機能です。
                </p>
                <a href="#" class="btn btn-primary">検索する</a>
                </div>
            </div>
            <div class="col card m-1">
                <div class="card-body">
                <h5 class="card-title">遺失物捜索依頼</h5>
                <hr>
                <p class=“card-text”>
                施設内で何か物をなくしたときに遺失物の捜索依頼を出すための機能です。
                </p>
                <a href="isitubutu_order.php" class="btn btn-primary">依頼する</a>
                <a href="#" class="btn btn-primary">一覧</a>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col card m-1">
                <div class="card-body">
                <h5 class="card-title">管理者メニュー</h5>
                <hr>
                <p class=“card-text”>
                管理者である窓口の方のための機能です。
                </p>
                <a href="#" class="btn btn-primary">問い合わせ</a>
                <a href="#" class="btn btn-primary">登録情報編集メニュー</a>
                </div>
            </div>
        </div>
        </div>
    </div>
    <?php include("html/footer.html"); ?>
</body>
</html>