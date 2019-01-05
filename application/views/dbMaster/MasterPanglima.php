<!-- Hotel Panglima -->
                    <div class="frame table-responsive" id="3">
                      <table width="100%">
                        <tr>
                          <td width="100%" valign="top">
                              <table id="example_table" class="dataTable striped border bordered" data-role="datatable" data-searching="true">
                                <h2>Hotel Panglima</h2>
                                <thead>
                                <tr>
                                  <th class="sortable-column">No. Transaksi</th>
                                  <th class="sortable-column">No. Master Kamar</th>
                                  <th class="sortable-column">Nomor Reservasi Kamar</th>
                                  <th class="sortable-column">Lama Menginap</th>
                                  <th class="sortable-column">Transaksi Lunas ke</th>
                                  <th class="sortable-column">Nama Tamu</th>
                                  <th class="sortable-column">harga sewa kamar</th>
                                  <th class="sortable-column"><center> Status<br>(0 = Belum Lunas | 1 = Lunas)</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $x=0;
                                    foreach ($query3 as $row){?>
                                    <tr> 
                                      <td><?php echo $row->t_detail_id ?></td>
                                      <td><?php echo $row->kategori_id ?></td>
                                      <td>No. (<?php echo $row->nama_barang ?>)</td>
                                      <td><?php echo $row->qty ?> hari</td>
                                      <td><?php echo $row->transaksi_id ?></td>
                                      <td><?php echo $row->nama_tamu ?></td>
                                      <td>Rp. <?php echo number_format ($row->harga,2) ?></td>
                                      <td><?php echo $row->status ?></td>
                                    </tr>
                                    <?php $x++; }?>
                                </tbody>
                                </thead>  
                              </table>
                          </td>
                          <td width="5%"></td>
                          <td width="35%">
                          </td>
                        </tr>
                      </table>
                    </div>