<div class="box-forms d-flex justify-content-center">
        <div class="container-form">
            <div class="forms">
                <div class="form login">
                    <span class="title">Đăng nhập</span>
	                <?=!empty($errors) ? ($errors) : ''; ?>
                    <form action="/login" method="post">
                        <div class="input-field">
                            <input type="text" placeholder="Vui lòng nhập email" name="email" required>
                            <i class="fa-solid fa-envelope icon"></i>
                        </div>
                        <div class="input-field">
                            <input type="password" class="password" name="password" placeholder="Vui lòng nhập mật khẩu"
                                required>
                            <i class="fa-solid fa-lock icon"></i>
                            <i class="fa-solid fa-eye-slash showHidePw"></i>
                        </div>
                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <input type="checkbox" id="logCheck" name="checkbox">
                                <label for="logCheck" class="text">Nhớ mật khẩu</label>
                            </div>
                            <a href="" class="text">Quên mật khẩu?</a>
                        </div>
                        <div class="input-field button">
                            <button type="submit" id="error">Đăng nhập</button>
                        </div>
                    </form>
                    <div class="login-signup">
                        <span class="text">Chưa có tài khoản?
                            <a href="/regsiter" class="text signup-link">Đăng ký</a>
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>
