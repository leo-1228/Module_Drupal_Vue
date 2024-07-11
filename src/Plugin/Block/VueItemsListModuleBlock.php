/**
 * {@inheritdoc}
 */
public function build() {
  ...
  return [
    '#theme' => 'vue_items_list_module_block',
    ...
    '#attached' => [
      'library' => 'vue_items_list_module/vue-items-module-app',
    ],
    ...
  ];
}