<?php
// Node class for AVL Tree https://www.youtube.com/@edubrotech?sub_confirmation=1
class Node
{
    public $data;
    public $left;
    public $right;
    public $height;

    public function __construct($data)
    {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
        $this->height = 1;
    }
}

// AVL Tree class
class AVLTree
{

    // Get height of node
    private function height($node)
    {
        return $node ? $node->height : 0;
    }

    // Get balance factor
    private function getBalance($node)
    {
        return $node ? $this->height($node->left) - $this->height($node->right) : 0;
    }

    // Right rotation
    private function rightRotate($y)
    {
        $x = $y->left;
        $T2 = $x->right;

        $x->right = $y;
        $y->left = $T2;

        // Update heights
        $y->height = max($this->height($y->left), $this->height($y->right)) + 1;
        $x->height = max($this->height($x->left), $this->height($x->right)) + 1;

        return $x;
    }

    // Left rotation
    private function leftRotate($x)
    {
        $y = $x->right;
        $T2 = $y->left;

        $y->left = $x;
        $x->right = $T2;

        // Update heights
        $x->height = max($this->height($x->left), $this->height($x->right)) + 1;
        $y->height = max($this->height($y->left), $this->height($y->right)) + 1;

        return $y;
    }

    // Insert node in AVL Tree
    public function insert($root, $data)
    {
        // Normal BST insertion
        if ($root === null) {
            return new Node($data);
        }

        if ($data < $root->data) {
            $root->left = $this->insert($root->left, $data);
        } elseif ($data > $root->data) {
            $root->right = $this->insert($root->right, $data);
        } else {
            return $root; // Duplicate values not allowed
        }

        // Update height of ancestor node
        $root->height = 1 + max($this->height($root->left), $this->height($root->right));

        // Get balance factor
        $balance = $this->getBalance($root);

        // Perform rotations if tree becomes unbalanced

        // Left Left Case
        if ($balance > 1 && $data < $root->left->data) {
            return $this->rightRotate($root);
        }

        // Right Right Case
        if ($balance < -1 && $data > $root->right->data) {
            return $this->leftRotate($root);
        }

        // Left Right Case
        if ($balance > 1 && $data > $root->left->data) {
            $root->left = $this->leftRotate($root->left);
            return $this->rightRotate($root);
        }

        // Right Left Case
        if ($balance < -1 && $data < $root->right->data) {
            $root->right = $this->rightRotate($root->right);
            return $this->leftRotate($root);
        }

        return $root;
    }

    // Inorder traversal
    public function inorder($root)
    {
        if ($root !== null) {
            $this->inorder($root->left);
            echo $root->data . " ";
            $this->inorder($root->right);
        }
    }
}

// Example usage
$tree = new AVLTree();
$root = null;

$values = [20, 4, 15, 70, 50, 100, 80];

foreach ($values as $value) {
    $root = $tree->insert($root, $value);
}

echo "Inorder traversal of AVL tree: ";
$tree->inorder($root);
