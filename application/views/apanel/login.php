<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Нэвтрэх</title>
    <link href="<?= base_url('css/login.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('css/tailwind.min.css'); ?>" rel="stylesheet" type="text/css">
</head>

<body>

    <div class="h-screen w-screen" style="
        background-image: url(<?= base_url('images/background/bg1.jpg') ?>);
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        height: 100%;
        position: fixed;
        z-index: -10;
        top: 0;
        left: 0;">
        <div class="flex flex-col items-center flex-1 h-full justify-center px-4 sm:px-0">
            <div class="flex rounded-lg shadow-lg w-full sm:w-3/4 lg:w-1/2 bg-white sm:mx-0" style="height: 500px">
                <div class="hidden md:block md:w-1/2"
                    style="background: url('<?= base_url('images/archeleogy-logo.png') ?>');background-size: contain;background-repeat: no-repeat; background-position: center center;">
                </div>
                <div class="flex flex-col w-full md:w-1/2 p-4">
                    <div class="flex flex-col flex-1 justify-center mb-8">
                        <h1 class="text-4xl text-center font-thin uppercase">Admin Panel</h1>
                        <div class="w-full mt-4">
                            <form class="form-horizontal w-3/4 mx-auto" method="POST"
                                action="<?= base_url("apanel/login"); ?>">
                                <div class="flex flex-col mt-4">
                                    <input name="lname" id="lname" type="text"
                                        class="flex-grow h-8 px-2 border rounded border-grey-400" value=""
                                        placeholder="Username">
                                </div>
                                <div class="flex flex-col mt-4">
                                    <input name="lpass" id="lpass" type="password"
                                        class="flex-grow h-8 px-2 rounded border border-grey-400" required
                                        placeholder="Password">
                                </div>
                                <div class="flex flex-col mt-8">
                                    <button type="submit"
                                        class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-semibold py-2 px-4 rounded">
                                        Нэвтрэх
                                        <!-- <?php echo CI_VERSION; ?> -->
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>