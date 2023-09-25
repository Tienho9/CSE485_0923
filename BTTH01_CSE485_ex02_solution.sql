 --Liệt kê các bài viết về các bài hát thuộc thể loại Nhạc trữ tình 
 SELECT ten_bhat FROM baiviet WHERE ma_tloai=4;
 
 --Liệt kê các bài viết của tác giả “Nhacvietplus”
 SELECT ten_bhat FROM baiviet JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
	WHERE tacgia.ten_tgia = 'Nhacvietplus';
--Liệt kê các thể loại nhạc chưa có bài viết cảm nhận nào
SELECT ten_tloai FROM theloai WHERE ma_tloai NOT IN (SELECT DISTINCT ma_tloai FROM baiviet);
--Liệt kê các bài viết với các thông tin sau mã bài viết tên bài viết tên bài hát tên tác giả tên thể loại ngà viết
SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat, tacgia.ten_tgia, theloai.ten_tloai, baiviet.ngayviet
FROM baiviet INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia 
				 INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai;
--Tìm thể loại có số bài viết nhiều nhất
SELECT theloai.ten_tloai, COUNT(*) AS so_bviet FROM baiviet
INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
GROUP BY theloai.ten_tloai
ORDER BY so_bviet DESC LIMIT 2;

--Liệt kê 2 tác giả có số bài viết nhiều nhất
SELECT tacgia.ten_tgia, COUNT(*) AS so_bviet
FROM baiviet INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
GROUP BY tacgia.ten_tgia
ORDER BY so_bviet DESC LIMIT 2;
--Liệt kê các bài viết về các bài hát có tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em”
SELECT ma_bviet, tieude, ten_bhat
FROM baiviet
WHERE ten_bhat LIKE '%yêu%' OR ten_bhat LIKE '%thương%' OR ten_bhat LIKE '%anh%' OR ten_bhat LIKE '%em%';

--Liệt kê các bài viết về các bài hát có tiêu đề bài viết hoặc tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em”
SELECT ma_bviet, tieude, ten_bhat
FROM baiviet
WHERE tieude LIKE '%yêu%' OR tieude LIKE '%thương%' OR tieude LIKE '%anh%' OR tieude LIKE '%em%' OR 
ten_bhat LIKE '%yêu%' OR ten_bhat LIKE '%thương%' OR ten_bhat LIKE '%anh%' OR ten_bhat LIKE '%em%';
