# README #

route我有改一些東西, 記得跑一次migrate by 吳則熹

# 管理者頁面
**AdminAccountController** 

顯示使用者相關資料的管理者頁面 

    ```
    @index, return $users //顯示全部, 主要頁面 

    @search($param), return $users //搜尋功能 

    @show($id) return $user //顯示特定使用者資訊, 注意user沒有s 

    ```
**AdminProductController** 

顯示商品相關資料的管理者頁面 

    ```
    @index, return $products //顯示全部, 主要頁面 

    @show($id) return $product //顯示特定使用者資訊, 注意product沒有s 

    ```
