# verifycodephp
php实现的验证码程序
##程序实现方法
* 实现验证码的程序主要是通过随机生成5位只包含a-z以及0-9的验证码，并通过php的生成图像函数进行图像生成，并加入一定的干扰素生成验证码图片。
* 而验证验证码一般是通过设置session来进行验证。为了避免程序读取session字符串破解，生成的验证码用MD5加密一下再放入session，提交的验证码md5以后和seesion存储的md5进行对比。
* 直接md5还不行，别人反向md5后提交还是可以的，再加个特定混淆码md5强度才比较高,总长度在14位以上网上有反向md5的 Rainbow Table，64GB的量几分钟内就可以搞定14位以内大小写字母、数字、特殊字符的任意排列组合的MD5反向。
* 但这种方法不能避免直接分析图片上的文字进行破解，生成gif动画比较难分析出来。加入前缀、后缀字符，prestr,endstr为自定义字符，将最终字符放入SESSION中。

##程序文件说明
* rand_create.php文件主要是验证码生成的程序，只生成包含a-z以及0-9的五位验证码。
* checkcode.php文件主要是验证输入的验证码是否正确。
* verify.html文件是前端页面，展示页面demo。

##展示效果
![页面展示效果](https://github.com/RedstoneCMX/verifycodephp/blob/master/showimages/show1.png)
![页面展示效果](https://github.com/RedstoneCMX/verifycodephp/blob/master/showimages/show2.png)
![页面展示效果](https://github.com/RedstoneCMX/verifycodephp/blob/master/showimages/show3.png)

##注
测试时，直接双击打开html文件浏览是不能看到验证码的，即url以“file”开头的，如：file:///E:/test.html，因为使用的是php生成验证码，必须要有web服务器的解析才行，因此一定要通过本地建立的虚拟网站或发布到外网进行测试，如 http://localhost/test.html
