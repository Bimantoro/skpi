Dokumentasi API SKPI :
1. SKPI_Label :
	* lihat
		apikode 	= 1500
		apisubkode 	=
						1 --> akses master label skpi (status 'order by status')
						2 --> akses id_l master label yang aktif
						3 --> akses label detail yang berada di posisi 0
						4 --> akses label detail yang berada di posisi 1
						5 --> akses label detail yang berada di posisi 2 berdasarkan refferensinya (master branch)
						6 --> akses label detail berdasarkan id_ld
						7 --> akses master label berdasarkan id_l
						8 --> akses label detail berdasarkan posisi, id_l dan urutan


	* simpan
		apikode 	= 1500
		apisubkode 	=
						1 --> save master label baru
						2 --> save label detail baru

	* update
		apikode 	= 1500
		apisubkode 	=
						1 --> update label detail
						2 --> update master label dengan id_l sesuai parameter menjadi berstatus aktif ( sedangkan yang lain otomatis akan berubah menjadi non aktif)
						3 --> update master label dengan id_l tanpa perubahan status aktif / non aktif

	* hapus
		apikode 	= 1500
		apisubkode 	=
						1 --> hapus label detail by id


2.SKPI_Basic
	* cek
		apikode		= 1500
		apisubkode	= 
						1 --> akses skpi berdasarkan nim mhs (nim)
						2 --> akses skpi berdasarkan status skpi (status)
						3 --> akses semua data skpi ()
						4 --> akses cp berdasarkan nim mhs (nim)
						5 --> akses data prestasi berdasarkan nim mhs (nim) //hanya berisi prestasi yang sudah diverifikasi dari DPM

	* simpan
		apikode 	= 1500
		apisubkode 	=
						1 --> simpan SKPI (data)
						2 --> simpan CP (data)
						3 --> simpan Prestasi (data)
                        
    * update
        apikode     = 1500
        apisubkode  =
                        1 --> update data skpi (nim, status)
                        2 --> update data prestasi (id_prestasi, data) //kemungkinan berubah menggunakan 3 parameter
                        
    * hapus
        apikode     = 1500
        apisubkode  =
                        1 --> hapus data skpi (id_s)
                        2 --> hapus data cp berdasarkan nim (nim)
                        3 --> hapus data cp berdasarkan nim dan kd_cp (nim, kd_cp)
                        4 --> hapus data prestasi berdasarkan nim (nim)
                        5 --> hapus data prestasi berdasarkan nim dan kd_prestasi (nim, kd_prestasi)
    