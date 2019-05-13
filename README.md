# README #

route我有改一些東西, 記得跑一次migrate by 吳則熹

1.目前 編輯 按鈕為按下去後，就只顯示那一行資料，調用show func
2.我在 controller 做了參數調整，看這樣會不會好寫一點 
3.route增加bulletin，再麻煩你新增有關的資料表及controller
by 黃魚190513

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
