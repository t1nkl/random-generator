<?php

$finder = Symfony\Component\Finder\Finder::create()
    ->notPath('vendor')
    ->in(__DIR__)
    ->name('*.php')
    ->notName('*.blade.php');

return (new PhpCsFixer\Config())
    ->setRules(
        [
            '@PSR2' => true,
            '@PSR12' => true,
            'align_multiline_comment' => true,
            'ordered_imports' => ['sort_algorithm' => 'alpha'],
            'array_indentation' => true,
            'binary_operator_spaces' => ['default' => 'single_space'],
            'blank_line_after_namespace' => true,
            'blank_line_after_opening_tag' => true,
            'blank_line_before_statement' => ['statements' => ['return']],
            'cast_spaces' => ['space' => 'none'],
            'class_definition' => true,
            'clean_namespace' => true,
            'compact_nullable_typehint' => true,
            'concat_space' => ['spacing' => 'one'],
            'declare_equal_normalize' => true,

            // die_to_exit missing
            'elseif' => true,
            'encoding' => true,
            'full_opening_tag' => true,
            'function_declaration' => true,
            'function_typehint_space' => true,
            'heredoc_to_nowdoc' => true,
            'include' => true,
            'indentation_type' => true,
            'lowercase_cast' => true,
            'lowercase_keywords' => true,
            'lowercase_static_reference' => true,
            'magic_constant_casing' => true,
            'magic_method_casing' => true,
            'method_argument_space' => true,
            'native_function_casing' => true,
            'native_function_type_declaration_casing' => true,
            'no_alternative_syntax' => true,
            'no_binary_string' => true,
            'no_blank_lines_after_class_opening' => true,
            'no_blank_lines_after_phpdoc' => true,
            'no_closing_tag' => true,
            'no_empty_phpdoc' => true,
            'no_empty_statement' => true,
            'no_leading_import_slash' => true,
            'no_leading_namespace_whitespace' => true,
            'no_multiline_whitespace_around_double_arrow' => true,
            'multiline_whitespace_before_semicolons' => ['strategy' => 'no_multi_line'],
            'no_short_bool_cast' => true,
            'no_singleline_whitespace_before_semicolons' => true,
            'no_spaces_after_function_name' => true,
            'no_spaces_around_offset' => true,  // Laravel specifies just inside_offset
            'no_spaces_inside_parenthesis' => true,
            'no_trailing_comma_in_list_call' => true,
            'no_trailing_comma_in_singleline_array' => true,
            'no_trailing_whitespace' => true,
            'no_trailing_whitespace_in_comment' => true,
            'no_unneeded_control_parentheses' => true,
            'no_unneeded_curly_braces' => true,
            'no_unset_cast' => true,
            'no_unused_imports' => true,
            'lambda_not_used_import' => true,
            'no_useless_return' => true,
            'no_whitespace_before_comma_in_array' => true,
            'no_whitespace_in_blank_line' => true,
            'normalize_index_brace' => true,
            'not_operator_with_successor_space' => false,
            'object_operator_without_whitespace' => true,

            'phpdoc_indent' => true,
            'phpdoc_line_span' => true,
            'phpdoc_no_access' => true,
            'phpdoc_no_package' => true,
            'phpdoc_no_useless_inheritdoc' => true,
            'phpdoc_return_self_reference' => true,
            'phpdoc_scalar' => true,
            'phpdoc_single_line_var_spacing' => true,
            // phpdoc_singular_inheritdoc
            'phpdoc_summary' => true,
            'phpdoc_trim' => true,
            'phpdoc_no_alias_tag' => true,  // phpdoc_type_to_var
            'phpdoc_types' => true,
            'phpdoc_var_without_name' => true,

            'increment_style' => ['style' => 'post'],
            'no_mixed_echo_print' => ['use' => 'echo'],
            'visibility_required' => true,
            'braces' => true,
            'return_type_declaration' => true,
            'array_syntax' => ['syntax' => 'short'],
            'list_syntax' => ['syntax' => 'short'],
            'short_scalar_cast' => true,
            'single_blank_line_at_eof' => true,
            'single_blank_line_before_namespace' => true,
            'single_import_per_statement' => true,
            'single_line_after_imports' => true,
            'single_quote' => ['strings_containing_single_quote_chars' => true],
            'space_after_semicolon' => true,
            'standardize_not_equals' => true,
            'switch_case_semicolon_to_colon' => true,
            'switch_case_space' => true,
            'switch_continue_to_break' => true,
            'ternary_operator_spaces' => true,
            'trailing_comma_in_multiline' => true,
            'trim_array_spaces' => true,

            // unalign_equals, align_equals is default false in `binary_operator_spaces` rule
            'unary_operator_spaces' => true,
            'line_ending' => true,  // enforcing LF not possible
            'whitespace_after_comma_in_array' => true,

            // risky
            //'no_alias_functions' => true,
            //'no_unreachable_default_argument_value' => true,
            //'self_accessor' => true,
            //'logical_operators' => true,
            //'no_trailing_whitespace_in_string' => true,
        ]
    )
    ->setLineEnding("\n")
    ->setFinder($finder);