<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
body{

background-color:lightblue;
}
    *{
    margin: 0%;
    padding: 0%;
}
.header{
height: 50px;
width: 100%;
background-color:palegoldenrod;
color:black;
font-size: 50px;
font-weight: 800;
font-family: 'Courier New', Courier, monospace;
font-style: oblique;
}
nav{
    width: 100%;
    height: auto;
    background-color: white;
    color: red;
}
img{

    border: radius 10px;
}
#spa{
    color: blueviolet;
    font-weight: 800;
    font-style: normal;
    font-size: 30px;
}
     </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
               
                <center><div class="header">STUDENT REGISTRATION</div></center>
  <nav>
      <h1><marquee>please register!!! please register!!! the deadline for registration is 29th april this year</marquee></h1>
  </nav>
  <image src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAACcFBMVEX///9txNAAAAAAnnL///77+/v4+PjvrkrwsE/29vZXvczu7u74mR1ows7z8/Pp6ene3t7/zhSYyLLl5eXZ2dn/yRbMzMyurq7GxsbT09Pb29t7u5+2traEv6UAm22jzbmOw6uz1cXD3tC/v7//wxf9uRiYmJiNjY37rhv6qBxUr4xispLj7uiizbja6uFkZGRVVVWjo6N4eHjxuWciIiJAQEJYWFhxcXEbH4Rar44+Pj4bGxsrKyv9+fL0yYyJztir3OMJEICHh4f78OD44cDY7/PD5uzzwHaZ1Nza8OnywXr0zZY3qoKtwDOBkSuUpimWoGfX2Og1OI5xc6wqLYmur8+IirkAgFv2kgD327PQ0OMAAHu7u9ZTVZybnMNYWp4+QZL66tP/8bX/65j/8MQRr4IAOSn33bmd2NOxir6SXKh4LJSAPpguAEDIqtEcAABze1N4hiimqpq+wrFpa6eWsKIbKiTD1c96tKKnurQGDxkWIi/k0LaXinXPupwrMzr/533/42H/3UT/99T/7qT/42l/tcFIfoorU1gPTkEAcFFNdGj/0VJVnoQMMTb/238DIx0AOiALdVhXm6ctaG9ogIEyTUURXUYAdFBEMz5FW1f5sDIAQigAFxIhaFwuS1YqIC9LOFDCdwVvRRFFKjFoQnWLapFhSmlcNWyZgH88CliTaKgyGj/JrdFVEW0ZACiAa4gcFSpZAHB1RImOTqaWf55vXnY5BQ5iMDUsAAlzPUKUbHCgp4FfaDtSExw0HCHLoWhQOxg1PwBVYRqrtnCGkkUvNRjP2pJLVgBvdVd4g0JQVES4zTtMVS1ohnhwpo/vPNF3AAAgAElEQVR4nO19jX/b5nUuBBKQaJQAK/ISpAR9kS3QSbJJQCLpUKTEkCJNWopd2ZJVybZs5cPOZxsvlh33465L0qWO69S1E7tx56zZmqQ3TdNuada7renuXdrdNtvsf+me874ACZKgJMqyne7n84sjCSCB93nPOc857zfD3Jf7cl/uy325L/flvtyX+3Jf/rsIVywWS6VcVUoluMBz97pY2yCcWCzlylMd3h1O4u2YKudKRc+9LuVWxA3/+GINm7ejY2qqXC6bKiyXp6amOjpqOEtF/l4XuU0BdFMUAFFTqVipRIaGBrpB+uDfzoGhSKRSQcMtVz+XK/7JWG2xNEU054VCFyuRgcGR4VkXSH+/yxL62+xwb/dQBIDmpijKculPwGKLuQ6zsMXK0OAwwKrhIqhmZ+v+hvuzw90Is0y/WCreawjrCdimF3UH6AZ6q0hAVYODzw9EKmfPjlKpgNFGnu/r6x2pfah3qFL9univgTgLV7LgRfqGq9h2RiqjbimfSCTiaky2f16PxQ313Nmh7l5qxC7UJbXwjvJn0Cc9xDoRnqm82ZGdkVFaTiHNRkUhmmHVuq8EWJCJTNLQzw11WygHK0XzSZ8tjMUy1nyuWOmb7UceeWCgYitgjNXxh5g26r6ECJOcP2qwbBrot9I9jAzUP9tdIY/z5j47tFOcIpVe2Un0MNsXGa27zbOm8gLpOr1EAWGe/hKjV0aHerGGXMNDlRIo0lv+bLAOVjiUhVrnbG+kqeYFsEWFRHStLq6rgBA8U+KZpFa9ODpE2AestTSFerz3pEMMCvCNuEjdjzp4D4f+FpeFxuspuBxkuJTAaFUKwmTo7CAhqr4K2kZH7h5nOznAN1WMDPeDC/VWGMYXdyiQwRIxfPWX03BNYHoyDBOuuxN+Q6cVNlIpdmCEvJMANhB0FsCHvjO7k1inj800Q+SSFCKbt2vYg1f8wXSs6fMyOy7vGsR0gGKculfuSIyI2ufwgIdaGPBjvMkcGY+aMSHaLvaQWMGyWtPHQ3Anxox2o0P2Vkro5vfCVDl8c67Si7QwUGWXMLqcv/nTkp4gEMO1S0ilhphilaYnx+BOBiiGYJztLpaxJu8MinUEFThVHCJFsFVwEGEkGrQYRkLkgmireu2qTv70j4eZBglm4nArAF+JjvZhgIygqZbvcgYACtxRqgDBuPrqgh9BSBRgE9XElWftWQ3yT4gRkw38wzBJBeMIqjY6IVd6gcR6R3N3WY18GSNENzpgpf5ONBkiEOsMVclQpUoIqSpotj7Go4GFhwK2T4fSXDUX0NhxPYLuOIQ2k7sjYJwE3uYFBaIDcpRgqqIkgQlB0nbNBNkUT3/Ga+kAb+oa7ghx+6fjMuNnSSIHv+f9YcYzSBgH1Dh1l+I/xIiO4gDGq9Gme3IK/k00QATWjAd5TzCTMS+6GZ9sVK1ZSNoDRjANF5F6OeQt6nwRrM0IeMbdsVSsSw+GiCGmpykwqIDQH28wVInNG19n2W9oNQ2KUd0AM80Yqp6fYO2tqjT+EaNUE7OIiesDjx8EwvHe+fDPTSHFzLr6h0cZJdWUg6pGNM1qCuEbyMjoRT6ULayeXJqZmdxDZXJmZmm6kM2KQd2Ig75sXhscxy/pJGUNsbXrEXxlpXznnVEEFywOgQK7OUZhm4ge6DIZ9dBYB1EjyDDZwjQAG+tqls6usT2TS6uFrBSwOXOchEekZINJ2mILM9pLLPVOh40iuiByaARzK5NA7GKYGYqOuba/sDQ5VgPU1TVmifk3kT0z0wUKkPNAfCC/SaDYeChdRyzcToA4BM44dQchiggQAtRshRoSazR+IkUDXjiZCq3OjBEYnaCsvWCVqwWwS1MKhdXppZm9Y3gT/+1ZWgWQUixl5XDgyuNpveHhEajancU7CREfXhmBfBhVZzQlmigxWsLgN2fGKLqxmZOrWfgq6dQnPcHYNZzLlYrYCZxdPTk5RlGOzRQYTs6k6XPySMdNsQH9vw/s6E5BxEdDFOwfJDYVZkmLob7rhYlPqIanMEPNcGxmOst4iiXs+nYSs7MbPBVRAsilLCMbpPRR2jpulFHg8F4sxx3p4DABurrNTvtElESFOlOKsgn1m5PUvZYKWQ92fRMszkJh5op8dnVmD34JFEkVBzE/7YSCA74ZuUMQRQQICdRO64JqCNiGrWsb5EOrk7Skq1m+VO5oDa4OZke5hCAJK82gRzJiolGFPbqRyisiY0HcdkPlTIBD1St+lvOPI8Ro7VOre9Gn9kxnsfPUAZ0XB2ScUZaLTPYkOm/nZIHBLo6614spsxEtM32moW43wKkqQMnKnjGBnKCh3cS3BwsIjFEst1BeK4R4C1qbRWZ10sSo16mwx8SXjAF9DwLXAemVtxdhGcIEkAwA9GfYhEycRUly5qvDTNDHFGaIkRWI+lrBmJpax2yJIqmZA+fYMnof7SJQJVBmDCD2gxa3ObvJQSYzQkgmQHwvrcPLPBN+2uPAZmKGeBK9aHJdfIChvB5CxDhV5Fb3IlGt1t5OGv1shpqKCIkr+OJgaVtzVMiVSmD+gxDoJkx7mcj7aHgnOahRAOvqhFIV18OHCMsbUA9iZKbBHztnstbraceBlbzmJ0Q3BOUhrPXtAogWMdDf3wsai+lsLG6CjKkJDP2QvWnTaFknN8KHCHPrKNjCWC66l8Abxyw1YnKRrjZj8sA2PHhMBDxnmwACjZYhYRoBfvZjb1owaBEbSb0931BRgZNZvrxhbFgXYcdUFWOOKyArL1FfhGbWhFQtTYKFFtoosF5larvYJkdodNZq7oYmgozPGK8mbfq3IFiPTUPDeJ3Cm8a5HkJv2fb7FFXjJFoql7YHXfCKJPyouFzDQKjb4orghECjrlqHjDwOzR0/6QKFRjr3PyF/3lvgbApsZhNvzkJRMqE2RQ3vlN1FQY3MKjx4D8bGBJuuvlwaZ+k4DjThekvb0uj3dOwoDbpcA7ZLOos2wytp7FnCqp5xF20KdAgJ3hy9VENoQa4hLTUiLmYxOK5i9K9mvzz2X9HsHgh1qLwdgR9CfaTf1Vd3TWdp9hiMpWagENNMrs4DbTFhyiouRQZB3bzTgLTDW2pkWS9EgyVw8JPApVb4FxK1DIMDtql03H5UREOYdQ03JLqq2T/oBoBjq1xT4XLVXy2/K5o6NBFOWT9zltUWO5oELBVIunOJi5ldVQEC0Oq3AnJ4oHTbIQN4FCNhpfG6QUYnspDG7Cl4mo3SKnjNPDGQkOxzh/nTa78N950CpbfMoTMu+cdRibxO6K3WYTcA7YDbtlPg0SFXf3d9pyhKLCaFdfCTPdmiA4d6c1aB0TwB0Y5iiU4dMme4FYu07VS0oBQdOdY7xRcQYoBN6VqaZe1ZMGAccc1GOm6PT4GPwUZnHe5AWPoLyCDH3E4A0a0s5ZRyoNGSw9wKvgit/iJOCIMnuK0aabT3KU8WDPUkdcDGYZ9RiNLgRrczMDW1I9dHup2aJRWfgSjhqEFSMqIUIKASt15HtdmILIkWwMYo4u0oohanmZART8Tzofqv7wSSn7odsoH6gcja22yjDBM2TnY5mGj1L28OSKCj3Dgjz938KL5YLltcVR8UzSeioWLQ4D1NygI+nb2toAjVM1JLZupEWAUTLTQAtEdC4A6HWWqFgtPDOJ4mtFZQaTAHnrzLsYSQTXaXt568Qe1E+vt3Ot5D0yl4mtzGYhjSRHD62ouOT3Obja6iU+PKO8VMd3btdTAkhsT9knfLEaODqNDRj917ujpXOaf0LLeDFKrFOwsPt3xbcWpH0Tlr9ZYh9HfOOH4LvKhvy0oskkgx5HgPAuES41jhpRyhlxbPLDzi5NRUuKKDjZr1xkxi6uQkwIS5jh1b63qjXuhY1tXOzkm3vcJtWWmxVG7NnoVvr/dGsVX72FvMAttknb4DEaO3vDU6Le7oGLL3rdkEXjeWLTqzqHfd8FT4y/VfWqKM0xgX4aGr0JZyVH8fodOtxMRyaxXOdHau8vWFqKZfU55aOYBXGgqVfWGDt2IKCDGjSYlT6IqOdko9cQuJDaQzEVv/r12gOmeYBoOi/oceUxO3++FGjs++0BARC482fILLOTaTvSUgtzFHO+1FJW6hhzi3o9znHAu5veASTaQADSMg/FJ9+bOPNJQp+wJitl18pCnOcY6MCrnNags+BSXu7NjRfsCY2lFyNTQLTYFk5iTXnKx5y2KuyVZefAT/T/SWfZgghIDofgmvFWr3G6Tk5OEQMoBPCw5U7IbEJtd+wECe6W9uNeEDx7r2MI7V7NSOeQRxuV9CrX37pcKLD3/+pUdffPg78NejJDK+4Jiq2CB6q93kwKddXZNOHx9w9T++PsE5CfDMA6R7rUmg3b1a3NEMsMMxs3D/JWYxL3770Ue+83mbvPCdzz9ScDMvtQiPFkTAl6v2wHUg2aw6fHp01tU31S7XgBXmnKN9dgxY27G56vyKF18ovPjIX37eSV749uez2JJ1AFmiLZMyNj1qL8B3O72jD820zZYw5DPdLpcTz0yjCm1WtAFAJvu9FxzhUfnOw1nHBgcJjOVSrt7dOVCik1kD6T/e4W3PTMFzR1wjDje4PXUqnKr2cv9V0/w05tEskOn/2EBeeOTRxoDBMCFVvZIrlqYaIxIo0YlO+VlX71SbbAoZm7ORAmXXqXAqhyNpL3/3/CuvXFDDgt/eBH/xey99oUEQU+O1L7xkf4EoCD2xa/39ixcvXGlq8IMSHXO33rbZtLWRTnbuaQj25WLu1cXHUBZPnDh/IlFjp8L3vmiB+OIXv/Cdlx5+seALh32jq48+/P3vfeGLNYjfL1Rn1OTZSydO0Mc9tvg3Ta6e7epccihVpN8FbNpO0C+hkTp1zxTGOk96bK/0eq/s6CituRbNQj322A/okHA2yzz6xZp8/1FfVNOMmJY31Hje0IL+1Ud+ZLs/8yhFyI+7zOcsXr58/spfXXn5yhW7xWANOyjR40I2LbZstjQLxIpZx3CPVlKNVt7Xrp4/f+LV7772eoZlz7seW7x27fz5Sz3kg6vf3/sls/Rf+tHMqqLF4lEhL/i5ABNQ/UYqrynZR7/3pepnvmeWW4FHXr3mWnyFZS+dv7y4uNjvmp2tgYTEpsspYAy7htvLTad2PO7cAbUX6Lrq/y//kNQ2TqtffMXIsG8YsTfeiClR7Ep1d/3Zl0x5SVLzYUXlGUPgwoxfYAIaE9XFUEz1PPqlqmDOyUV1JRzS8m+wLHvtsaosslesOs25nbmmu01HFL0d8JXRZqUXoB1a4xnv+RPXXlkEs1r84bUfXL964vwrP4RK/+EP2DCT7fozU8YKeiyeT2kiI/cwHoHhgIuCsiSPp2JqSnZPWp/7sx9NM+N/DQwDWuu/fP4Ge+Hi5WuXF1858earf3Ol+sYOaNeMORgjxot2sm8gmhHXsEMkPtk5Zs+5vVeuvPwqe+NGPhoKXYaSuR7D9YSLN3zMmFXumbARYiRD1oxkWlNVXdbzWspIx/RQ3gc6M/zTP6pi/OZVBAjPWQRgGs+LytfZv6iio28srmJy2iSQ1gx2eDff0s+hG/Y63Ji0G2kHbaq+/A02FmaY+Bv66/FLMTkaVeXJPV/5HJUlRRMYXsMYogUCIT0aDclBn+TXwSQ1iKB+I1T4kfnZr+yV5Hw0rLFxqIgJiRHUOPvdpq4uCIlLTXXvBkccaSMiuoFo6sfTLAGu5m3vLOcw4Huvs6zG44CJas7HPGkBPCnjuFgep3EHkWMxKxDQTWX4IJ8XEKdS+JwFkXKIzgYZMa2GY7GM2hAuKJvudSgZRMQ2qIZrRTSFzq5CsU6FmHh04BqtTCbFKOZEPncXRfiVJR0nL8pkpAHh8AhVxMFHCZFL+PFAugbxc5RQY6zCpMZjRlJiGhF2eDHoOzgihO/c5ntr+I6Ox8kMy0aZBjesbzchRt7NBMczsh61VgQtWQBlVTZUmcD2k9EjBOchE/N1VGcI7uv+fGjVUiLNq/l4Ipb0J3EOX3MXODiiU25KqWazCEFNg65ZB7ed6Zxs6iOl3bFBNhhOmDaa7aTF3RPUoLS+mKrp0YCMuIiBElNlAnpAUbVkCN9i+Jcss6Zl78nokhbjaFEaXoe5qUN/DTT028hqgEp7XQ84NKb3ghs2mQ1tehoZMk8fnd4qbtZAQKEo4/GF9ATwKIgSDivAp7qmJeSgnxHIzEZ/PmvZtRnr0rLIktrwNL2unN3rFBEJmXbwm8xqIGcbdqJSrL3mSqVx1seG9RT9GC3tV5Y04n8a6TzlZfC/QCgaCgZDeigsQXQkCFTyf1kumLXSSYuYUUJJ+rCm4eUpbsapW5GHEju3wZ0EsoPZ/sHm6wXwAFu8vwKC/dv05tejOh1+Np2qk/AIE6bzREJkWCxMrEgg9h+kV8gIPWfwe00lUgOMR2WzunJXXn7ttZdfe7mWuPFLTjHfDY29qTYQ5mabB2Tc0HKqJqVXXnv16z9+660f//gbr74e9aGaklGVIlwyaUYj/qbTqT4y+SNMDFoil3g69VYlcKN64XN/+3c/eesnf/ctonJDlxNg3Erqjbfe/tnPnnjiiXfefevV1whKb3HasQXV205mmmvROAQqJV35mMi8/84TT3z1q0888bO3f/rM+wlD9iWDiFAMGT8B5D/5u78txNWoxDE6URtHf9gRMnTOiAKZjV/PJ5n/9d6HTz75s3feSkArk9c1ZUJNvP/eB796EgF+lb7p/W98F4wGk28HMu1rJyCWaThsMoWTnXsgGXj5u+z7PyXv/Tl58ZO/evqpD957hvWraUVN/+KnpEwfaYoiKnlNUwkoD4UjEZwiHdZQKWhdzoPD6r6fP/U0IAR1/fLHE+lMPsq+98FTTz39qyfJi37+c/NN7/39d8+iszQXbrB/dvPDF+UWAX+pcy/3OvvMB0+bNWu+98mnnwJ5xq/+4r1n3v/pTz/EYn51jhgpp0ODEIJFSCdAKTSOcrocCCpq3ogR5/Tpc09ThL/85bvvf/CMHnoGH1pFCC+idfnUP3wErWCHBlR3GwjdJKVxCPhAYp4PzffadEgR/kJS33sa77z97lvvPPFVP01vkDE9AUWPgTYNVYOEU5Z1DXCrWiwvh/yWOzIp8cmnP3z77Xffhef96ulfBKO/eMr2JvIiivCpJ7JdTgGxHYQQ1FshnBF/ZXsxCrz3w6ef+od/eIoVQixqAa9/9NGCj9qluUDEF2V4jyAGJCIBQRA8XJDmBzqde2RwH7Fv/OMv33nn7Z+CZEQf++EHH3zw4Ycfvv0OyEcfwf9+9iHKBx+5HREO9Lu2B+E/vvvuP1JJGXkDRNPy+byqJ+KcJ/73c1B2QRR5j0jDAGOuOAnQORSUYjj6I0yvmWSbF4UolZAcx3lsqUQw0IMSAPHZRHA7JjVDru1ByPh9fio94RApUDAMEsrj+jMpzcZSRJKxaCyKrmdOueuhaGg8NBGa1xTaC5mXol+fIJKh0yu5FJuIJ5PJeKJe0hrjiLAdHbrLLf1wRmKdJUVtTY6Zy9IzcnqcTeRDJkJThzRa1COMSoxfyadZSWEpwom4OZlUUjQjhpIy7CI7W2k7ftiSS5FpiGWCaWoaSTMVBZr34UBtpSXvkdCUxJDMhFXAmzD0oJ/z0aladTrEa0JPNJbMTKRTckpiPB6e5+F/G6XPt880FOFQc8hZajHO7CQBwpGCoafS4+OJeEqXQwF/2C+CCNDGh0ihpVLxzHgmYyiYE+Wb9yloJc7Roq14iDmN0wD+EkT8zRZDoiwKcZCTwooWT5J5dwAIhEwxHE8nNT3kE81oYWx+1KHgiLCtnIZk3g7j29OO3VzOIlIWjdJ16B50LVEMRYGU8D9J5HARCghtPzFcbLNNOzfpaWg2sLby0lKLtsWq86CBs6g016asIVLGkciohoe2rRXijgEaVQKNqynXEeditNW2aNU+LDh25LWQUAr5x0xZeIpQJM4mmHkp+RElcd+fah65aiknnUypvfZh0evcxnd28RbiiSmQpIVNBtFpO5iora5tATgFRcvHN/1cpHSHOW5mG3+Tj2jVT+Mecxz4aSFgppDZpGKqHBaYENER6WuzEBK1CoZs5KNi0GG9aCtxT3bONI+pYj/Njk3303AdXqe+Njc+e/MlEUkrXdA9QRnS7Bh20fiDPNQy/ON5IayG9Hw+rpJlN80L+1tLdqzzZPNV2te2aSJ07i91Y7jYPNUwOkladGQXzqMFQqQDKq+rkMXmNT2lKaBbuuuQ3LRHzTriHCy620hLGTK45jgdyrl13Uo8pK/NR7mGbvMVECFrgTY8qJG0+inV+vLtjG1Od3Y6dmK00+fdctwi22JqWQsJk5iokhARJXmbD3H6EY+AbsiR9fxcymFTolbixsEnh6vtjVu0HntyHrxrKdGMqvhodkMQMT7UKslOQ4g4GsU9QBKBdR7RJNk9LbtL2xh78tDxw8bLpP6ybQwlM3I+qAObBEBtuMSVdNFwxDExGvpVKZrX0qGNnlInhS6nQeB2xw9bDM24mVXHx68jss5wYkoDijFUn1/w+3nG08NwXFiHbDWWV6M+LbrxU+yy1Nk8Q9HNQHR7vK3JGC3G8d0t5rOsI9E8NItUgZN8KRVoFKhUMzRdhaxbjoU4xm8EN35GnezpnHRwn7bH8VvOxXAeY15PelIKI+VFk1R7GNHvF7igQoMJNgvbk4Ij2fHtzsVwF3d07HT1O8ynWW0ncTNFSQXFPOQ0MkDy9SghAdiT4bUg3GjTQhlSxQ6xov35NDgnatap2zu7x3nu3Loi6nklH+WllBrDVmIib/j8akjOy+3PsG8xFYM0ndqbYdpiXpubaTHtagORorFMPP21r/36t//7t7/99dfYBDR/g1tZQTDtOP/Ss4V5bTjtq99p2lfBedrVBiLH2X/6Lco/h3XA+Ntf/xMb19p1QYaMYDp1M2xlbiKdX+o0WcHZETZ6XI82zv4rxfgv//LPAJHNaBj9A6QzMqiAbNxCxNEvB55x04l77a60zOFahGEH3wUy24wSQ0b+N795FuXjZ+k8sBQbH/8aYvz1v/6f/0s3RAmk/rCPyql/+8MnG0d+994uJyrf0hxhbCM+7jzPe3IzSvTt279v3/6HqOz/TYBjNFYTJTnJshOp0GrnfyT8jF/71PrEvlP7/3P/xh0Zq11ODactzvPmWs7VL3RtIuoLvwdggBGEYPzyaMrY9TuIimE1iP0Q30zJevoPp079HuTTZ0/tf2j/qX9v3hutQVCFDpXLbW2uPrJpr/N6i8lNtKGMj0/te+g/9yk9gYBv1D8aCKei3Coo88XfKb/7f7/bD6oIZ3y+Hp8oCjzn+fJDn3yy79TH62fgbiRSJxVudb2FpwPXzHQ73CngcoT1xfcHsLt9+z6dg/JzZLwwLjCrYI0P7dfh3/6uGWg5CYIgSUA10eh/nUKT3t+0N1q9uLu6HPtrR7a4ZmaddU+tViDVxHeK+Na+U598SuTLz/6FzjxnIQQ0zzEy+8kp5Bg0ZKgMuPfHdcMHNmwc0/4tr3taZ+1alqxAWjcJNP4Nyrz/1KdftuQ/DCa0347QSHzrz0EgTDynY3188u/J9Tv2V1v4P1mKsLX13FO4qGTWCQiuQFoXYPCTU6f2nXpoXy0A5GXmuTqE4VT1nvTxKZD9+5v3TLYJVKtjNnUb6w/XW0M64+zzVZH3/yd4275T/4Fqeu655xQ5rjXoUJ5I/ZFo9/effgrVAW746bpkOtPCNfpwIfCOLS7Jp+uAndJH99j6TWEu/wlECfQvKvs/gZY89UPZRBhkz/zXxx9DRvCbb33rWcD3bHTdUp7scmwXohcObn0xN67lbrEEsdDVYjGgJT79j/se+j0Z9Qbhs3GFCexDhAoiPIW7zUuCKOCAOM89t+839jycF/wSjt1s5n23t5Z7vfX4J7u66gcTOXFubs5eLEH548eyOTYfDE5AoA8+C64ZfHb/J39EezSCgXAoFJJVOazbIiG3fOj08QMHjh89vXKkSq7ZVjZzm+vxQYlesqeCk8zY1zvOLRw6dmB+9/yBY4fmbJ/xRzGlVmQUBMFHo36G85k5Ns/znNvtgYoRrKXRwvLK0d0PPrgb5EH4MX96gfArJDPOfu8meyrczgYuQFLdLfbFgIYMTcHnFk7PHz58eP740aPH53cfPnx0YU7wiNLckZWDp48dPX1w5YgNtHDkkO1PYfnQ8QeJ7IavHz8+/+Dhw7uPriwLoji3vHDwOII9toIjFS2yfSjc0G3ti0H2Nhl2jhjEcpaYudMHdj944ODKssRzaKlQrgd3H4DCYunA1o4fePDB+aMASxDmlleg0Lt3HwD7W56Dv04fgFsHQaAmwDDBNI8dXJkDQxfm5vy4EfYcaHT3CpqL8/D6NuxtUt2fxklwQ44l/hCYEp1sCHrz4+7cywuHoNSHFo7M+YFL/IhkN+joOJjx7vljx+bRBufnoQoOHFsBz+VweoMo4FQiYq3CkYPw0QNHD6IbikcWcHcD5y0juG3Yn4bhnfcY4kmTD/f/meaw0nl0xONQ7KMrcw5PmTsCbgpy7NAyz8ytHASDPHoa9Ep5yT7/QgS73W3JAeLUS7jND1Od/WeTof7+299jCMkG9+BpDIq4wsJNtv9YYrgjB8FSD4OaAOThw8eh6BAEhLkjpi6X6SwansCQlpdtdeAh3oY6BQMFaz06D7Z9HL6yfGTlNCj78BxmoyROCInGgzCABLdhnygkG9zrq4FPhQnaSEeIM8zC7t3HDy7MIRB0HeSNAwfQEcEF4efh+YNHyE0RbqKlHoe/QRDE4XngIoR2gH78+OmVZUufwsLp5SyQzF4SCMOhdH0ZeNxEbhv2+nLar41sKpZQTIhdk9nlI7akWQTHAzM8fvTgoSPLfoE44vz8sdOoITS9A7sxrGAV7D56aFnyYPMKVb4MAq0teAIH6j+yjEMcmIwSgHg5Wb/dxrbt19a854f2ItAAABFoSURBVB4jJFk2L9IssrAHt/vC3/jllUOHgOmxiEAcgi36c6A8wjbHwILngElMTTo1JsClkZnALObM+oOLuIqI0eo6crZvzz2yOyvum1jlZDw2Bn2CLBJhsntxyzaGWThK7Gz3AVvBpeWFhQWTUCSM7OZ1DyhsztSIRb0roLZlcN2juw+DlQPCBe4k2c4P35RJBjkmat93muybuGN79k3ELhvc+7La8QYA6dSJNGU33Bhvxr18dPfBlZVDxyBqg/UBshUSsYl3nV6w2EU4cvr4cTNTwRo4dPwwADI/BwKZA3xYBEXOkT0FSXOCHguSkm1Ug1UOTrhdO+2K3h25oSrbyCybJNSqJFU67oC7l44VRIKCkxZqyI6D90E4h7/nj0F8XFg5bYaC46cPrawcPHYAU5ZlwjqgyGNHMYRYuSiGIro5FCfLBp3yWDXTUXCbbdy/lJy5Yu5By2C/Z4KUIpT2WIcf0M1Gs9AooAsqgCZXwOrmJBG7aTwSSV+oDR87eOiQhRNynblaGOI8olj1BNzNr2um1pEghIw0y44HGTIgDqHeNZDb1tMuavsI48kodC1IxsYT2SW6ye7yiiN7MBj0kYeOUEQS5KwQKOda7kWE2+w27prk0QGiQaxm+/cRRrbxmntBMxLZiTKcNqcXCDopdAG3/t1b8CyAYiBgg+EBbQCoGixLaoTDIMsuw6fAksGegWxQOOBnfBaJgrI9kVHNnVr7+vv7to1lqiWZIttdk7AYzOg+ubpxMaNOkHp1L+FJCDMFbuEokuH87hp/AL8uUELlSC5NMnERXBZTtAcPPzg/T3NV+P3oAkc2XR4jCvQnkxnbVBuODPm7+3Cza++2H+XBm7vqI0R/PmWb8JrCI39QrA29xSOnscwHkE0WgF4PYsIyDw4ITItR8QAJ/EcJA+1GsNCix7bWgfmDy3zB2s4bZ/2ByiTbfDAyf8PdR7ed3+YNyxnz4IDZ5k4NPD8gBNkz/o47cXd2zaxyc4dOL/irtCFignYcYAIwzNiOHILG0vz8AUzRaq7Izc256XblZNt5JgxRKVX3KmIGvRgI78wBEOR0i9nGbnBPPIyb3Qsx2hFBN57fM+0wPRJD/pzlktACnJMa0vnsSfQ/uq0+w2vjvlTd+VBE3CN4RBGU5I4cxIY1B4Gov9defUaUJ+eLahPm0BGYGZSzaxLP7fCsHDtOOlzmql8B9UI2au92kuYw+GSnJ/GMCzByelkE75Ym2Ew9NZPX38FTShBicaTffs5TTwy0yBqMP8FUa7VAzyfB8zs8pAMHuOboQUzKIEE7Oo+CEX/hyBESNpfn+ML0JFJx5x7if/RJuJBBbjgEBc8oGbyDZ5SYEHttZ5FxcT/uep/kzWkxHrqiAhRCTvEY27u0mhUlzDyPkib+g7R5P49OeBSbjn4xu7q0d8w6EwO/7FPps5Cs4/YtZ/FEJNfO0p0ESCB6i4Mus3NKkPMYrvJsXLGGjeS4OcGicHJvl3lKzszJ1UKWA8+DzPoIpuJHMF4KXLawujSzp4scwNI1OU3gcaGUnV4C0EqrwtmJp2hBS+dOAgQDmoK2FDRc+gfxNcEEOp/OTlR3vQfamdDNEmTJ+TEEJh4XNDmzND29ijJ9cmlmkhwUZNUB1R6eVqZM1J2gowGf4hQ4NzM6gmcU5XbcgTBRLxwem4WBkVoqnhEbtR1TAvRnHyNzF6bpmUdEUXVCL45NLpnozFWJ6Hu2EMinWTJLlZzZNXI3zuxi6Llr6IyzVrM/wKYsu/FNmLttcyoudiW/urOF6SU8t8t2cNfYGOoUrZeGFb8s62YtCRk2UXuZP0XiBY+e0X13zl1jbGfn9VLCkWrnpqlVdeKBpArH1Br6bjzHqkCstIBnW5kRk8xJlxOynrHcL28/y9NPFFi5u2fnEb6hB1hSNXK11DHDWsc2C2my/b2e1DaeJ+PDc/LEmGnePfWpjJvh+sipsuTMvu2CsKGU0VJ34hmhdT2pUdvxTzGWLPSZIGtEBU1TdSUaDNCOxXBQUY1YSjUpRSG+Vt3pucGX8Rw7FzmK9K4eDFxCl6iM1EyVSJLNVMumkX1ADFO/ngk2oasJlvQke6JAmD3htHWkJRJwwohaFBpkWU2wtGW+426fQ8pYZ8kOkLNkzRQnqNtTEBkPbK7GSbBf+NVjnWxpYJhTquE8T/ooEmbt8HF23Jz0hkcCuoYj+LK/uvtHAufwYPBReh4w7U2TE7azREAT4Z64RTT8BIBX6eILhihYQtVZiXWIdMSY1eGLa/Rjo3gOoYucB+y9WN/MuCsSPu/1QoZTgUjcP7uT1nBYq9KqAD4Zs/+lCuNWvw4oeMKPuZCpFw+HZyKzGfqXj6YPo4P0/HHIYrzekeHmw63vuETPDz9Pzx1/gFR1w+gNxGpbTimxbMZCwBBKio9DOmv+2UO0F7OBcJPDovHMamAYb+/IyMXGcwjvgvguDY+MPF87O362N2JPGCEht03F80GmotQGHsBAlVgtefHENUkIZugcRgiQPD1bvZecH+99HgCOXO2584iaJHER3tzrrWF0DQ+NMrUdEO2egz7HpRiPyTQI2JOu+SEYbMywMFTIkeOoP8TX0dcLCK+1szJq2yR84+JIb28vqhFsFcwKHNJFFYkgffa+whAmKn5GMbUmjEOrGVI8KxsKE3T4rdEhtPl+1yDR346OwT5EeHndyUR3TpRLFwFhX99gB4DsKFWGhknhRoaaZm9IEA9kv19nrUkKGTbuY8ITE5m6borKALTh8SjlSBEP/vZOdXcThBfaWEO7vaKcAYh9g4Pd3VOIMVeM9BEDmx3urlCUpsUGdV0zjFg8RvXq0WJ5FbJWQawO/rpHI4NYQWDq3ZViGfE9PjBAEV64JyZqljxzgSDcOTDweAcaa6kY6SUgXbMjOyOj9W1VjrcylfrObm400j1ifqsvUswR83x8aMhEeLX9VRnbKELyJkU4NDREMHoRJNUk6rJ3Z6SyXjLiqUS6zSqh2kN2gYc8HomYCAcvqOt8/25I/paFMBKJlBEkarIyBOVGl8L/AdDugUikUqmMUoHfIkMDg73Dsy7rQ6C8SjFHv57btStiQ3hPVQjSc8GGcNeuEi1lRxlREtvrpwoyf1jSX/s5i4oG2/RSE4BqsCPs60tvtDAjrBmasvldJ9qVOh3u2gUawq0UCUo8BakSGegbGZ6ddTXLLOh2cAjAlXJT1WrheLER4a3r669vU66HJJ+ebFvVUDEpdcNEwmNc6GtAiM16j6kShEkOsgKzBLskBe7r7u4eGEKjxaOtyhTcDnIsMDzQzY82IoRoYYTX6V9L3TwbUtzdZ9rsgpPTIU8gyW6wOlBJX+xtQmhu7ccXc9QtUby49TeeVk0ET6/G02NN6SBHO5vihHDk4jW6rN0Z4Zo4eoZbY9tYTcxgpjzAGHr+zHo85tOuvjnS2xIhEa5I1OStorGJeWy12bC1vuSIcGRk+PJfX0qq0bpEiRMlXzgUTaxBuyRujYBtVqLsuH51lBtqmdGD4Z+HvLR3A4RmUXgRT1vDw8eJwG/FYlHknOzK5odDO3cShCMjD1y8OLy4eO0HLDuRjtOdmpLxRIYe+3rm6tU3L19j29QhtL9PXNKia8mwT8KtrXiybgLn9vAeUQrrsfOXZ4eHMfMGhN0NCJue1s6yU95DEQ6trd28eeHmhesXXk8ZuOuWRjbP1DUi+XzeeP3mzZtrt27dghoAKrvBtsemCntpdvbi5YsXLly9fj1JtmpKkS2boOrSGfbG+TfffPMqyPULKDdR1taGIruA6je7w6azcFJIVg1UUl6Vo8GAr2E6dLUiRiu7QM2oZEQ4PHuibYTs4uzwA6AiaoKgHtAOFapKqlZSJp+vJxhSZFXLY2XrSnBLsUnsUdRUIp7S5KB/w15D8FbUM3hqFeFEex05NYRghCZC58psEE4MyhooQA62sYDSE1CM5PWUdq5ns6VsRni+fYSXt4SQISFt19m1m6/n1dBmlCkpxvXrN9HEwUw2j3DXnUC4KQdzQ1NhlHBh9/M3L6gBbl2iEZXU1Qu3wBNMR2guJXgEbkAseRjO7/f5PJJEWl1UhzY/bBdhlGWv2RBGqq/nenr8UtTP9IQkJgzFFyS+/skWQghn8PaRizeV1meUefSrl+EdtUqsIeRFRgopuuZXcYM6H255x6VY2VCjbIpRNXc0Hnsd2Hbt1lYRhmwIB9fW1uD1qbyR5BnOYCURXudjWTGqMZ6MyhqYGnMk++HJsTE2hBCthxfXzjq/XLkGzY4RgtDUoYeD2OlTRD4V0yd60nFR64mSLv5x7MZQM4FgQIqxak8gyp6rnLs+wN68ecZEeG3rCG+y19euD+0y0iKfTmFXJ8OpPCNqmXhYYTxSmA0jd8pkSAYrXAyQgGYixLcvnog76jF14cKbF20Iz55T/LGMT9eYVJJjQkIqofuYIBkJyJCtzycSCuOLqqwWiGWgFofWAOGtKsL2hm3sOjxzc+1cZNd4jHcbUE8yKzKAUJCDbCxIPkl26k6SpEmH4nDx9Nmz2lBVhw9cu7Z41ZFytIHuWxffvGgiXIvH5Jg/xMZUnqfHNucn4gEuALmxJKQNsBIlEwr6wgoXZ6VYGu1kjb1607LSy23Gw5CNac6kJ4DoMnEPY2R44CCCUNIZleTlCoEG7oG9RXkcoTbY1K6UpcOr+HaXM0J9oLt35PIlS4fp1LmwCAyQ5Hg6vqZOCH7Zx0a5fDid9EFKw4aUWEhlBFaQ2bOVs0M32bVbz1cRtpe1hWzx8OrVgbXIrj9nw+K4jjm5hscBhFMcE8eOMg0RBrRoHMcoknGcv6Cy59YshGduvHn58uKZHqHeSzySLxA0wMbevHHDQpgaH8fNIlNsDOc/8npYY9VYPhTTVDWgK4osBUOhqC8Y5ZmgyMnx1OvnrrNrN6+bCBc3agc1SJi94TIRdl9nSXPuHDSk8Zak4KMkyPJxPx0+qgcZ3pCZPL5hHNwFiCLNnqsivDR88dbNm7FkMg7Jn2Hk86lYIh3H9Dm/tjbYO3J1wkKosmeDUY8h6myKV1JakAtILcnDivhrVT9cZNvYEY0ghLzU1CHJOCnRtXwhmK3Pz4QNzcPoMneOPVtFeGJ4pG/nUGTUIwqCtY2sJHqAlYEqwErPVxGeY3U9GU75pMDG6VBzTuNi2+tUDbAnqgh3tpHT8BwTDo6OxiJ1CLuHGjsW8aO7IgP1CFN6UNpk3mQh3Fnj64n2/NDHnnhsa1lbQzw8c34DhNfYarSobD5rg5eQjpGd3X23gI/P32Db2XmRiJw+ce3iRRqr2kTItYXwMmuL+PUIgY7Cwais66qqWdsya0YskWEnSNv3xg3cdjiRNNRNbBvSLLwSh2dcugqtP8hpzp07e9bnC/QEcFtkEHipKdFQOBDo8flqm+PydQivtYFwF/kUDzQLbcRYElqlZAdwaCb6Jcnf0xMOBq0No6EcAXRofsNNedfD6IcX5WnLF6qP7Bssm0IRYoMwhk3iTGY8kUjiYESPH17aCiEPFcFA+twjNSJEM9m1axdAM6CNjY3EcKu27z0QjhfIxsBqPpYG68nEDfVchHQeNiAU0roa9yispmPsNBFetHS49no8zWZiaqjnznXubocIvpCsxTLsjas3bz6PCC/XEMbiDJc2fGwgEK5HeOvmVaiZFG4D+icjnD+kG/H01Ys2hDzkA1ws3cPGyHC3iXCYPcOmY+rWej7utfBCUGNrCLl4DP/52BCJzVWEqr91C/KzLxy7WLPSEBsOTQSC5qQbE+HsjQ133vlMi2hHyPToMjT4lBDhSAvhpXb3FfxsiVCHsE4shCf+5BHO/vdGyBuv33z++UFA2NTh5oa2xeCtN89vOAD62RfRF9I1TZcVSL6wgxxbUQHIN7XU9QQE+D9lIq0XEbs7IRGERBMTQAD8Jx0l7st9uS/35b7cl/tyX+7LfbkvdfL/AUFBkME9K0ftAAAAAElFTkSuQmCC
    " width="80" height="100">
    <div class="joinpart">
      <centre> 
           <form action="login-user.php" method="POST" autocomplete="">
   <fieldset width="75%">
       <center><legend><span id="spa">JOIN MASENO UNIVERSITY HERE</span></legend></center><center>
                    <h2 class="text-center">Login Form</h2>
                    <p class="text-center">Login with your email and password.</p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <br>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login Now">
                    </div>
                    <div class="link login-link text-center">Not yet a member of maseno university? <a href="signup-user.php">register now</a></div>
                </fieldset>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>