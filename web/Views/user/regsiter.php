<div class="box-forms d-flex justify-content-center">
        <div class="container-form">
            <div class="forms forms-singup">
                <div class="form signup">
                    <span class="title">Đăng ký</span>
                    <form action="/regsiter" method="post">
                        <div class="input-field">
                            <input type="text" name="fullname" placeholder="Vui lòng nhập họ tên" required>
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="input-field">
                            <input type="email"  name="email" placeholder="Vui lòng nhập email" required>
                            <i class="fa-solid fa-envelope icon"></i>

                        </div>  <div class="input-field">
                            <input type="text"  name="phone" placeholder="Vui lòng nhập số điện thoại" required>
		                    <i class="fa-solid fa-phone-office"></i>

                        </div>
                        <div class="input-field">
                            <input type="password" name="password" class="password" placeholder="Vui lòng nhập mật khẩu" required>
                            <i class="fa-solid fa-lock icon"></i>

                        </div>
                        <div class="input-field">
                            <input type="password" name="cpassword" class="password" placeholder="Nhập lại mật khẩu" required>
                            <i class="fa-solid fa-lock icon"></i>
                            <i class="fa-solid fa-eye-slash showHidePw"></i>
                        </div>

                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <input type="checkbox" id="termCon">
                                <label for="termCon" class="text">Tôi chấp nhận tất cả các điều khoản và điều
                                    kiện</label>
                            </div>
                        </div>

                        <div class="input-field button">
                            <button type="submit">Đăng ký</button>
                        </div>
                    </form>

                    <div class="login-signup">
                        <span class="text">Bạn đã có tài khoản?
                            <a href="/login" class="text login-link">Đăng nhập</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
