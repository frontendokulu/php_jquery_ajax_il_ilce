# php_jquery_ajax_il_ilce
PHP, Jquery Ajax kullanarak, ile isimlerine göre ilçe isimlerini getirme uygulaması
Uygulamada ek olarak bootstrap cdn şeklinde kullanıldı. Bu kullanım bir takım sorunlara yol açtı.
-----------------------------------------------------------
Bootstrap ve Jquery CDN olarak eklendiğinde Jquery'nin slim versiyonu eklenir ve bu versiyon ajax'ı bir fonksiyon olarak görmez, sonuç olarak ajax çalışmaz. Slim versiyon yerine min ve development versiyonları tercih edilmelidir.

Jquery'nin CDN'de diğer versiyonları tercih edildiğinde boostrap için önce Jquery'i yükleyin hatası verir dolayısıyla yine uygulama çalışmaz, hatta sayfa yüklenmez ve tıklanamaz hale gelir. 

Sorunun kaynağı Javascript CDN'leri yüklenirken gelen integrity ve crossorigin parametreleridir. Bu parametreler silinip
type="text/javascript" parametresi eklendiğinde hem bootstrap hem de ajax fonksiyonları düzgün şekilde çalışacaktır.
