        <section class="our-teachers">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Guru Kami</h2>
					</div>
				</div>
				<div class="row">
                    <?php

                    $sql = "SELECT nama,foto_profil FROM guru";
                    $result = mysqli_query($db,$sql);
                    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    ?>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="our-teachers-block">
							<img src="User/file/user-profile/<?php  echo $row['foto_profil'];?>" class="img-fluid teachers-img" alt="#">
							<div class="teachers-description">
								<p><strong><?php  echo $row['nama'];?></strong>
								</p>
								<hr />
							</div>
						</div>
					</div>
                </div>
                <?php
                    }
                ?>
			</div>
		</section>