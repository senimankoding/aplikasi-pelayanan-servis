
					<?php
				//filter.php
				if(isset($_POST["from_date"], $_POST["to_date"]))
				{
				    include 'config/koneksi.php';
					$output = '';
					$query = "
						SELECT * FROM dataservis
						WHERE tglambil BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."' 
					";
					$result = mysqli_query($conn, $query);
					$output .= '
					
						<table class="table table-bordered" >
							<tr>
								<th>NO.NOTA</th>
								<th>Tanggal Terima</th>
								<th>Teknisi</th>
								<th>Tanggal Ambil</th>
								<th>Biaya</th>
							</tr>
					';
					if(mysqli_num_rows($result) > 0)
					{
						while($row = mysqli_fetch_array($result))
						{
							$output .= '
								<tr>
									<td>'. $row["no"] .'</td>
									<td>'. $row["tglditerima"] .'</td>
									<td>'. $row["teknisi"] .'</td>
									<td>'. $row["tglambil"] .'</td>
									<td>'.  $row["biaya"] .'</td>
								</tr>
							';
						}
					}
					else
					{
						$output .= '
							<tr>
								<td colspan="5">No Order Found</td>
							</tr>
						';
					}
					$output .= '</table>';
					echo $output;
				}

				?>
				<div class="nav pull-right">
					<button onClick="window.print();">Print</button>
				</div>
















