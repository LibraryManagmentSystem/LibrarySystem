drop trigger if exists after_update_sach;
delimiter $$
create trigger after_update_sach
after update on sach
for each row
begin
if New.ngay_xoa is not NULL then 
update muon_tra
set ngay_tra=curdate()
where ma_sach=old.ma_sach and ngay_tra is null;
end if;
end$$
delimiter ;


drop trigger if exists after_insert_muontra;
delimiter $$
create trigger after_insert_muontra
after insert on muon_tra
for each row
begin
update sach
set isAvailable=0
where ma_sach=new.ma_sach;
end$$
delimiter ;


drop trigger if exists before_delete_docgia;
delimiter $$
create trigger before_delete_docgia
before delete on doc_gia
for each row
begin

delete from muon_tra where ma_doc_gia = OLD.ma_doc_gia;
end$$
delimiter ;







drop trigger if exists before_delete_sach;
delimiter $$
create trigger before_delete_sach
before delete on sach
for each row
begin 
delete from muon_tra where ma_sach = OLD.ma_sach;
end$$
delimiter ;

drop trigger if exists before_delete_dausach;
delimiter $$
create trigger before_delete_dausach
before delete on dau_sach
for each row
begin 
delete from tac_gia_viet_dau_sach where ma_dau_sach = OLD.ma_dau_sach;
delete from sach where ma_dau_sach = OLD.ma_dau_sach;
delete from xuat_ban where ma_dau_sach = OLD.ma_dau_sach;
end$$
delimiter ;













drop procedure if exists in_the_thuvien;
delimiter $$
create procedure in_the_thuvien(IN f DATE, IN t DATE)
begin
 select *from doc_gia where ngay_them BETWEEN f and t;
end$$
delimiter ;


drop procedure if exists in_ngay_muon;
delimiter $$
create procedure in_ngay_muon(IN f DATE, IN t DATE)
begin
 select ngay_muon, count(*) as total from muon_tra 
 where ngay_muon BETWEEN f and t
 group by ngay_muon;
end$$
delimiter ;



drop procedure if exists in_soluong_muon;
delimiter $$
create procedure in_soluong_muon(IN f DATE, IN t DATE)
begin
 select ds.ma_dau_sach,ds.ten_dau_sach, count(*) as total from muon_tra mt
 inner join sach s on s.ma_sach=mt.ma_sach
 inner join dau_sach ds on s.ma_dau_sach=ds.ma_dau_sach
 where mt.ngay_muon BETWEEN f and t
 group by s.ma_dau_sach;
end$$
delimiter ;








