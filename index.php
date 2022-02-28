<html>
    <head>
        <script
            src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous">
        </script>
        <script>
            $(function () {

                $('form').on('submit', function (e) {

                    e.preventDefault();

                    $.ajax({
                        type: 'post',
                        url: 'ajax/ajax.php',
                        data: $('form').serialize(),
                        success:
                                function (data) {
                                    $("#info").html(data);
                                },
                        error:
                                function (xhr, status, error) {
                                    console.error(xhr);
                                }
                    });

                });

            });
        </script>
    </head>
    <body>
        <a target="_blank" href="https://calculatoare.ha-ha.ro/generator_validator_cnp.php">Generator CNP Pentru Teste</a>
        <br/><br/>
        <form action="" method="">
            <label>
                CNP:
            </label>
            <input type="number" name="cnp"/>
            <button type="submit">Verifică</button>
        </form>
        <div id="info"></div>
    </body>
</head>