<?php
/**
 * Custom Content Model Entry Icon
 *
 * @see https://stackoverflow.com/a/42265057
 * @package AtlasContentModeler
 */

$atlas_content_modeler_entry_icon = <<<ICON
<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
	<path fill="#9ca1a8" fill-rule="evenodd" clip-rule="evenodd" d="M16.5528 3.10557C16.8343 2.96481 17.1657 2.96481 17.4472 3.10557L23.4472 6.10557C23.786 6.27497 24 6.62123 24 7C24 7.37877 23.786 7.72503 23.4472 7.89443L17.4472 10.8944C17.1657 11.0352 16.8343 11.0352 16.5528 10.8944L14 9.61803L12.2361 10.5L13.4472 11.1056C13.786 11.275 14 11.6212 14 12C14 12.3788 13.786 12.725 13.4472 12.8944L12.2361 13.5L14 14.382L16.5528 13.1056C16.8343 12.9648 17.1657 12.9648 17.4472 13.1056L23.4472 16.1056C23.786 16.275 24 16.6212 24 17C24 17.3788 23.786 17.725 23.4472 17.8944L17.4472 20.8944C17.1657 21.0352 16.8343 21.0352 16.5528 20.8944L10.5528 17.8944C10.214 17.725 10 17.3788 10 17C10 16.6212 10.214 16.275 10.5528 16.1056L11.7639 15.5L10 14.618L7.44722 15.8944C7.1657 16.0352 6.83432 16.0352 6.5528 15.8944L0.552787 12.8944C0.214003 12.725 0 12.3788 0 12C0 11.6212 0.214003 11.275 0.552787 11.1056L6.5528 8.10557C6.83432 7.96481 7.1657 7.96481 7.44722 8.10557L10 9.38197L11.7639 8.5L10.5528 7.89443C10.214 7.72504 10 7.37877 10 7C10 6.62123 10.214 6.27496 10.5528 6.10557L16.5528 3.10557ZM13.2361 7L17 8.88197L20.7639 7L17 5.11803L13.2361 7ZM3.23607 12L7.00001 13.882L10.7639 12L7.00001 10.118L3.23607 12ZM17 15.118L13.2361 17L17 18.882L20.7639 17L17 15.118Z" />
</svg>
ICON;

return 'data:image/svg+xml;base64,' . base64_encode( $atlas_content_modeler_entry_icon ); // phpcs:ignore WordPress.PHP.DiscouragedPHPFunctions.obfuscation_base64_encode