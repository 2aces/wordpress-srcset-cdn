# Wordpress srcset CDN

* <a href="#english-version">english version</a>
* <a href="#portuguese-version">versão em português</a>

## <a id="english-version">English</a>

Since version 4.4, Wordpress has support for responsive images using a list of different files on srcset attributes on img element. The browser checks this list against the UA width and UA type and chose the best fitting one, instead de the one on the common src attribute

But IF you you use a CDN to serve your images and rewrites URLs on source HTMLs using WPEngine CDN automatic url rewrite or plugins like [Futta's Autoptimize](http://blog.futtta.be/autoptimize/) or [WP CDN Rewrite](https://wordpress.org/plugins/wp-cdn-rewrite/), those image URLs on srcset won't be rewritten to use your CDN (sub)domain.

This function uses the new wp_calculate_image_srcset filter to force Wordpress to use CDN subdomains on srcset list. We're not sure this is the proper of most efficiente way of doing it, so, you are more than welcome to give a try, test it and contributing making pull request with a better solution.

## <a id="portuguese-version">Português</a>

Desde a versão 4.4, o Wordpress suporta imagens responsiva usando uma lista de arquivos diferentes no atributo srcset do elemento img. O browser compara esta lista com o tamanho da tela e escolhe a que melhor se adequa, invés do arquivo indicado no atributo src tradicional.

Mas quando você uma CDN para suas imagens e reescreve a referência das URLs no HTML usando a CDN automática na WPEngine ou plugins como o [Autoptimize](https://wordpress.org/plugins/autoptimize/) ou o WP CDN Rewrite, as URLs das imagens não serão alteradas para o (sub)domínio de sua CDN.

Esta função usa o novo filtro wp_calculate_image_srcset para forçar a reescrita das urls. Não estamos seguros de que esta é aforma mais correta e eficiente de fazê-lo, então, você é mais que bem-vindo para testar e contribuir com uma solução melhor.

* <a href="#english-version">english version</a>
* <a href="#portuguese-version">versão em português</a>
