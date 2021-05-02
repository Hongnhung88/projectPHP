<title>Giỏ hàng - Wazii</title>
<?php 
include("database/database.php");
 require('headerorder.php');
?>
    <!-- order -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="col-12 col-md-10 border mx-auto bg-light">
                    <h3 class="my-4 text-center text-danger">Giỏ hàng</h3>
                    <hr>
                    <!-- Shopping cart table -->
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col" class="border-0 bg-light">
                                        <div class="p-2 px-3 text-uppercase">Sản phẩm</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-light">
                                        <div class="py-2 text-uppercase">Số lượng</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-light">
                                        <div class="py-2 text-uppercase">Giá</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="border-0">
                                        <div class="p-2">
                                            <div class="ml-3 d-inline-block align-middle">
                                                <h5 class="mb-0"> 
                                                    Giày Sneaker Unisex Vans Classic Slip-On Checkerboard
                                                </h5>
                                                <span class="text-muted font-weight-normal font-italic d-block">Mục: Vans</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="border-0 align-middle">
                                        <button class="btn">-</button>
                                        <input class="amount mx-2" type="text" name="amount" value="1">
                                        <button class="btn">+</button>
                                    </td>
                                    <td class="border-0 align-middle">
                                        <strong>2.200.000₫</strong>
                                    </td>
                                    <td class="border-0 align-middle">
                                        <a href="#" class="text-dark">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button class="btn btn-primary">Thêm</button>
                        <hr>
                        <p>Giá tiền:<span id="sub-total" class="monney">2.200.000₫</span></p>
                        <p>Phí vận chuyển:<span id="shipping" class="monney">20,000₫</span></p>
                        <p>Tổng:<span id="total" class="monney">â,220,000₫</span></p>
                        <hr>
                        <button class="form-control bg-danger text-white mb-3">Thanh Toán</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- order -->
    <hr>
    <!-- about -->
    <div class="row mt-5">
        <div class="col-12 col-md-6">
            <h5 class="text-center" >Vê chúng tôi</h5>
            <small  >
                Wazii.com™
                Chuyên cung cấp giày thể thao sneaker nam,
                nữ hàng Replica 1:1
                với giá tốt nhất tại Hà Nội, tpHCM.
                Bạn đang cần tìm một đôi giày thể thao sneaker đẹp và hợp
                thời trang và đang hot Trends đến từ các thương hiệu lớn nhưng
                lại không đủ hầu bao để sắm được hàng chính hãng? Hãy đến với
                shopgiayreplica.com – nơi bạn thỏa lòng mong ước mà chỉ phải chi ra
                1 phần nhỏ so với dòng chính hãng ngoài store mà vẫn sắm cho mình
                được một đôi chất lượng từ rep 1:1 đến siêu cấp like auth.
            </small>
            <img src="./img/banner/shopgiay2.jpg"  class=" img-fluid"alt="">
        </div>
        <div class="col-12 col-md-6">
            <div class="row">
                <img src="./img/banner/shopgiay.jpg"  class=" img-fluid"alt="">
                <img src="./img/banner/shopgiay3.jfif"  class=" img-fluid mt-1"alt="">
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-12">
            <img src="./img/banner/bannerfooter.jpg"  class=" img-fluid mt-1"alt="">
            <img src="./img/banner/banner-converse.jpg" class="img-fluid" alt="">
        </div>
    </div>

        <!-- about -->
</main>
<script>
    
</script>
<?php 
 require('footer.php');
?>