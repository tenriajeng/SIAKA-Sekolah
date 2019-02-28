    <div class="detailed_chart">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 chart_bottom">
                    <div class="chart-img">
                        <img src="images/chart-icon_1.png" class="img-fluid" alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p>
                            <span class="counter">
                            <?php 
                                $sql = "SELECT COUNT(kd_guru) FROM guru";
                                $result = mysqli_query($db,$sql);
                                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                                echo $row['COUNT(kd_guru)'];
                            ?></span> Guru
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 chart_bottom chart_top">
                    <div class="chart-img">
                        <img src="images/chart-icon_2.png" class="img-fluid" alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter">
                            <?php
                            $sql = "SELECT COUNT(kd_siswa) FROM siswa";
                            $result = mysqli_query($db,$sql);
                            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                            echo $row['COUNT(kd_siswa)'];
                            ?>
                        </span> Murid
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 chart_top">
                    <div class="chart-img">
                        <img src="images/chart-icon_3.png" class="img-fluid" alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter">
                        <?php
                            $sql = "SELECT COUNT(kd_mapel) FROM mapel";
                            $result = mysqli_query($db,$sql);
                            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                            echo $row['COUNT(kd_mapel)'];
                            ?>
                        </span> Mata Pelajaran
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>