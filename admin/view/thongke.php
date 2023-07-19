        <div class="section2">
            <form action="index.php?act=thongke" method="post"  enctype="multipart/form-data">
                    <select name="thang" id="">
                        <option value="0">Thống kê theo Tháng</option>
                        <option value="1">Tháng 1</option>
                        <option value="2">Tháng 2</option>
                        <option value="3">Tháng 3</option>
                        <option value="4">Tháng 4</option>
                        <option value="5">Tháng 5</option>
                        <option value="6">Tháng 6</option>
                        <option value="7">Tháng 7</option>
                        <option value="8">Tháng 8</option>
                        <option value="9">Tháng 9</option>
                        <option value="10">Tháng 10</option>
                        <option value="11">Tháng 11</option>
                        <option value="12">Tháng 12</option>
                    </select>
                    <select name="ngay" id="">
                        <option value="">Thống kê theo ngày</option>
                        <option value="1">Ngày 1</option>
                        <option value="2">Ngày 2</option>
                        <option value="3">Ngày 3</option>
                        <option value="4">Ngày 4</option>
                        <option value="5">Ngày 5</option>
                        <option value="6">Ngày 6</option>
                        <option value="7">Ngày 7</option>
                        <option value="8">Ngày 8</option>
                        <option value="9">Ngày 9</option>
                        <option value="10">Ngày 10</option>
                        <option value="11">ngày 11</option>
                        <option value="12">ngày 12</option>
                        <option value="13">ngày 13</option>
                        <option value="14">ngày 14</option>
                        <option value="15">ngày 15</option>
                        <option value="16">ngày 16</option>
                        <option value="17">ngày 17</option>
                        <option value="18">ngày 18</option>
                        <option value="19">ngày 19</option>
                        <option value="20">ngày 20</option>
                        <option value="21">ngày 21</option>
                        <option value="22">ngày 22</option>
                        <option value="23">ngày 23</option>
                        <option value="24">ngày 24</option>
                        <option value="25">ngày 25</option>
                        <option value="26">ngày 26</option>
                        <option value="27">ngày 27</option>
                        <option value="28">ngày 28</option>
                        <option value="29">ngày 29</option>
                        <option value="30">ngày 30</option>
                        <option value="31">ngày 31  </option>
                    </select>
                    <input type="submit" value="themmoi" name="thongke" id="">
            </form><br>
            <?php
            echo'
            <div class="section2-thongke">
                <div class="item-thongke">
                    <div class="item-tieu-de-tk">
                        <p>Doanh thu</p>
                    </div>
                    <p class="thongke-db">'.$doanhthu.'vnđ </p>
                </div>
                <div class="item-thongke">
                    <div class="item-tieu-de-tk">
                        <p>Số đơn hàng đã bán</p>
                    </div>
                    <p class="thongke-db">'.$soluongdh.'</p>
                </div>
                <div class="item-thongke">
                    <div class="item-tieu-de-tk">
                        <p>Số sản phẩm đã bán
                         ra</p>
                    </div>
                    <p class="thongke-db">'.$soluongsp.'</p>
                </div>
            </div>';
            ?>
            <!--  -->
        </div>
    </section>