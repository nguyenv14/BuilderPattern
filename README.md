## 1. Bài toán
Một cửa hàng pizza cho phép khách hàng đặt pizza theo kích thước (size) và topping tuỳ chọn:
Bắt buộc: khách phải chọn size (ví dụ: Small, Medium, Large).
Tuỳ chọn: khách có thể thêm các loại topping như:
* Phô mai (cheese)
* Xúc xích (sausage)
* Thịt bò (beef)
* Nấm (mushroom)
* Hải sản (seafood)

=> Như vậy, mỗi chiếc pizza có thể rất đa dạng về cấu hình (size + toppings).

## 2. Vấn đề

Nếu ta viết code theo cách thông thường (dùng constructor nhiều tham số), ví dụ:
```
Pizza pizza = new Pizza("LARGE", true, false, true, true, false);
```

1. Rất khó đọc: không biết true/false nào ứng với topping nào.
2. Khó mở rộng: nếu thêm topping mới → phải sửa constructor, ảnh hưởng toàn bộ nơi gọi.
3. Khó bảo trì: dev khác nhìn code không hiểu ngay pizza này gồm những gì.

## 3. Giải pháp: Dùng Builder Pattern
Builder Pattern giúp:
1. Xây dựng pizza theo từng bước rõ ràng (step-by-step).
2. Dễ đọc, dễ hiểu (.cheese(true), .mushroom(true) thay vì boolean rời rạc).
3. Dễ mở rộng (chỉ cần thêm method trong Builder).
4. Giữ Pizza immutable sau khi build.