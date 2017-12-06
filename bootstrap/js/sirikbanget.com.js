// JavaScript Document
$(function(){
	
	function load_grid(){
		var cari=document.getElementById('txt-cari');
		var xpage=document.getElementById('cmb-pagging');
		var grid=$('#tabel-tamu');
		var page=1;
		if(xpage){
			page=xpage.value;	
		}
		
		var dataUrl='action=view&page='+page+'&cari='+cari.value;
		$.ajax({
			url:'ajax/ajax_tamu.php',
			type:'POST',
			data:dataUrl,
			dataType:'text',
			success:function(respon){
				grid.html(respon);
			}
		});
		
		
	}
	//load grid saat pertama kali javascript di panggil
	load_grid();
	
	//aksi search textboxt cari
	$('body').delegate('#txt-cari','keyup',function(){
		load_grid();
	});
	
	//aksi pagging
	$('body').delegate('#cmb-pagging','change',function(){
		load_grid();
	});
	
	
//aksi click tombol tambah
	$('body').delegate('#btn-tambah','click',function(){
		var nama=document.getElementById('txt-nama');
		var alamat=document.getElementById('txt-alamat');
		var btn_simpan=document.getElementById('btn-simpan');
		
		nama.value='';
		alamat.value='';
		btn_simpan.value='';
		
		nama.focus();
		
	});
	
//aksi click tombol simpan
	$('body').delegate('#btn-simpan','click',function(){
		var nama=document.getElementById('txt-nama');
		var alamat=document.getElementById('txt-alamat');
		var info=$('#info-tambah');
		
		var dataUrl='action=tambah&nama='+nama.value+'&alamat='+alamat.value+'&id='+this.value;
		
		if(nama.value==''){
			info.html('<div class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert">&times;</a><h3>Simpan gagal!</h3><p>Nama tidak boleh kosong.</p></div>');
			window.setTimeout(function() {$(".alert").fadeTo(500, 0).slideUp(500, function(){$(this).remove();});}, 3000);
			nama.focus();
			return false;	
		}
		
		
		if(alamat.value==''){
			info.html('<div class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert">&times;</a><h3>Simpan gagal!</h3><p>Alamat tidak boleh kosong.</p></div>');
			window.setTimeout(function() {$(".alert").fadeTo(500, 0).slideUp(500, function(){$(this).remove();});}, 3000);
			alamat.focus();
			return false;	
		}
		
		$.ajax({
			url:'proses/ac_tamu.php',
			type:'POST',
			data:dataUrl,
			dataType:'text',
			success:function(respon){
				var result=JSON.parse(respon);
				if(result.success==true){
					info.html('<div class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert">&times;</a><h3>Simpan berhasil!</h3><p>Data tamu berhasil disimpan.</p></div>');
					window.setTimeout(function() {$(".alert").fadeTo(500, 0).slideUp(500, function(){$(this).remove();});}, 3000);
					
					//reload grid
					load_grid();
					
					//tutup modal
					$('#md-tambah').modal('hide');
					
					//kosongkan textbox
					nama.value='';
					alamat.value='';
					this.value='';
					
				}else{
					info.html('<div class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert">&times;</a><h3>Simpan gagal!</h3><p>Pastikan data yang di inputkan sesuai.</p></div>');
					window.setTimeout(function() {$(".alert").fadeTo(500, 0).slideUp(500, function(){$(this).remove();});}, 3000);
					nama.focus();
					return false;
				}
			}
		});
		
	});
	
//klik tombol ubah
$('body').delegate('#btn-ubah','click',function(){
	var nama=document.getElementById('txt-nama');
	var alamat=document.getElementById('txt-alamat');
	var btn_simpan=document.getElementById('btn-simpan');
	
	var dataUrl='action=load&id='+this.value;
	$.ajax({
		url:'proses/ac_tamu.php',
		data:dataUrl,
		type:'POST',
		dataType:'text',
		success:function(respon){
			var result=JSON.parse(respon);
			if(result.success==true){
				nama.value=result.nama;
				alamat.value=result.alamat;
				btn_simpan.value=result.id_tamu;	
			}
		}
	});
	
});

// klik tombol hapus
$('body').delegate('#btn-hapus','click',function(){
	
	//tampilkan konfirmasi
	var conf = confirm('Yakin data akan dihapus?');
	if(!conf) {
		return false;
	}
	
	var info=$('#info');
	var dataUrl='action=hapus&id='+this.value;
	$.ajax({
		url:'proses/ac_tamu.php',
		type:'POST',
		data:dataUrl,
		dataType:'text',
		success:function(respon){
			var result=JSON.parse(respon);
			if(result.success==true){
				info.html('<div class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert">&times;</a><h3>Hapus berhasil!</h3><p>Data tamu berhasil dihapus.</p></div>');
				window.setTimeout(function() {$(".alert").fadeTo(500, 0).slideUp(500, function(){$(this).remove();});}, 3000);
				load_grid();	
			}
		}
	});
	
});
	
	
	
	
});