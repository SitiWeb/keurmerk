<div class="jeeigenwebshop-badge" >
    <div class="jeeigenwebshop-content" >
        <div class="jeeigenwebshop-title">Je eigen Webshop</div>
        <div>
            {{$website->name}} is gecheckt door Je eigen Webshop. Wat houdt dit in?
        </div>
        <div>
            <a href="https://jeeigenwebshop.nl">jeeigenwebshop</a>
        </div>
    </div>
    <div>
        <img src="https://jeeigenwebshop.nl/wp-content/uploads/2023/05/logo-jew.png" width="50px" height="50px"/>
    </div>
</div>
<style>
.jeeigenwebshop-badge{
    float:left;
    
    position:fixed;
    display:flex;
    top:50%;
    transform:translateX(-200px);
    transition: transform 0.5s ease; /* Add transition property */
}
.jeeigenwebshop-badge:hover{
    transform:translateX(0px);
}
.jeeigenwebshop-title{
    font-size:16px;
}
.jeeigenwebshop-content{
    border:2px solid rosybrown;
    width:195px;
    background-color:white;
    margin-right:5px;
    padding:5px;
    border-radius: 5px;
}

</style>
