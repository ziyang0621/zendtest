
<?php $_from = $this->_var['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article_item');$this->_foreach['articles'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['articles']['total'] > 0):
    foreach ($_from AS $this->_var['article_item']):
        $this->_foreach['articles']['iteration']++;
?>
<li <?php if ($this->_foreach['articles']['iteration'] == 1): ?>class="first"<?php endif; ?>><a href="<?php echo $this->_var['article_item']['url']; ?>"><span class="dot">&middot;</span><?php echo $this->_var['article_item']['short_title']; ?><i class="iconfont">&#xe605;</i></a></li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
