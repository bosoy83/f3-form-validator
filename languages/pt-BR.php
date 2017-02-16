<?php

return [
	'lang' => [
		'validator_required'              => 'O campo {field} é obrigatório.',
		'validator_isset'                 => 'O campo {field} deve conter um valor.',
		'validator_valid_email'           => 'O campo {field} deve conter um email válido.',
		'validator_valid_emails'          => 'O campo {field} deve conter apenas emails válidos.',
		'validator_valid_url'             => 'O campo {field} deve conter uma URL válida.',
		'validator_valid_ip'              => 'O campo {field} deve conter um IP válido.',
		'validator_valid_base64'          => 'O campo {field} deve conter um código em Base64 válido.',
		'validator_valid_name'            => 'O campo {field} deve conter um nome próprio válido.',
		'validator_valid_cpf'             => 'O campo {field} deve conter um CPF válido.',
		'validator_valid_date'            => 'O campo {field} deve conter uma data válida.',
		'validator_valid_datetime'        => 'O campo {field} deve conter uma data e hora válidas.',
		'validator_valid_time'            => 'O campo {field} deve conter um horário válido.',
		'validator_min_age'               => 'A idade mínima aceitável é {param}.',
		'validator_max_age'               => 'A idade máxima aceitável é {param}.',
		'validator_min_length'            => 'O campo {field} deve ter pelo menos {param} caractere(s).',
		'validator_max_length'            => 'O campo {field} ultrapassou o limite de {param} caractere(s).',
		'validator_exact_length'          => 'O campo {field} não pode exceder {param} caractere(s).',
		'validator_alpha'                 => 'O campo {field} deve conter somente letras.',
		'validator_alpha_numeric'         => 'O campo {field} deve conter somente letras e números.',
		'validator_alpha_numeric_spaces'  => 'O campo {field} deve conter somente letras, números e espaços.',
		'validator_alpha_dash'            => 'O campo {field} deve conter somente letras, números, sublinhados e traços.',
		'validator_numeric'               => 'O campo {field} deve conter somente números.',
		'validator_is_numeric'            => 'O campo {field} deve conter somente números.',
		'validator_integer'               => 'O campo {field} deve conter um número inteiro.',
		'validator_regex_match'           => 'O campo {field} não está em um formato correto.',
		'validator_matches'               => 'O campo {field} deve ser igual ao campo {param}.',
		'validator_differs'               => 'O campo {field} deve ser diferente do campo {param}.',
		'validator_is_unique'             => 'O {field} informado já está cadastrado.',
		'validator_is_natural'            => 'O campo {field} deve conter um número natural.',
		'validator_is_natural_no_zero'    => 'O campo {field} deve conter um número natural diferente de zero.',
		'validator_decimal'               => 'O campo {field} deve conter um número decimal.',
		'validator_less_than'             => 'O campo {field} deve conter um número menor que {param}',
		'validator_less_than_equal_to'    => 'O campo {field} deve conter um número menor ou igual que {param}.',
		'validator_greater_than'          => 'O campo {field} deve conter um número maior que {param}.',
		'validator_greater_than_equal_to' => 'O campo {field} deve conter um número maior ou igual que {param}.',
		'validator_error_message_not_set' => 'Não existe uma mensagem de erro para o campo com o nome {field}.',
		'validator_in_list'               => 'O campo {field} deve ser um de: {param}.',
		'validator_is_file'               => 'O campo {field} deve conter um arquivo.',
		'validator_file_min_size'         => 'O campo {field} deve conter um arquivo maior que {param}KB.',
		'validator_file_max_size'         => 'O campo {field} deve conter um arquivo menor que {param}KB.',
		'validator_file_types'            => 'O campo {field} deve conter um arquivo do tipo: {param}.',

		'upload_err_ini_size'             => 'O arquivo enviado excedeu o limite definido na diretiva upload_max_filesize do php.ini.',
		'upload_err_form_size'            => 'O arquivo enviado excedeu o limite definido na diretiva MAX_FILE_SIZE que foi definida no formulário HTML.',
		'upload_err_partial'              => 'O arquivo enviado chegou quebrado.',
		'upload_err_no_file'              => 'Nenhum arquivo enviado.',
		'upload_err_no_tmp_dir'           => 'Pasta temporário não está disponível no servidor.',
		'upload_err_cant_write'           => 'Falha ao gravar arquivo no disco.',
		'upload_err_extension'            => 'Envio do arquivo foi bloqueado pelo sistema.',
	]
];