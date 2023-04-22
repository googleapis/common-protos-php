<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1beta1/expr.proto

namespace Google\Api\Expr\V1beta1\Expr;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A field selection expression. e.g. `request.auth`.
 *
 * Generated from protobuf message <code>google.api.expr.v1beta1.Expr.Select</code>
 */
class Select extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The target of the selection expression.
     * For example, in the select expression `request.auth`, the `request`
     * portion of the expression is the `operand`.
     *
     * Generated from protobuf field <code>.google.api.expr.v1beta1.Expr operand = 1;</code>
     */
    private $operand = null;
    /**
     * Required. The name of the field to select.
     * For example, in the select expression `request.auth`, the `auth` portion
     * of the expression would be the `field`.
     *
     * Generated from protobuf field <code>string field = 2;</code>
     */
    private $field = '';
    /**
     * Whether the select is to be interpreted as a field presence test.
     * This results from the macro `has(request.auth)`.
     *
     * Generated from protobuf field <code>bool test_only = 3;</code>
     */
    private $test_only = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Api\Expr\V1beta1\Expr $operand
     *           Required. The target of the selection expression.
     *           For example, in the select expression `request.auth`, the `request`
     *           portion of the expression is the `operand`.
     *     @type string $field
     *           Required. The name of the field to select.
     *           For example, in the select expression `request.auth`, the `auth` portion
     *           of the expression would be the `field`.
     *     @type bool $test_only
     *           Whether the select is to be interpreted as a field presence test.
     *           This results from the macro `has(request.auth)`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Expr\V1Beta1\Expr::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The target of the selection expression.
     * For example, in the select expression `request.auth`, the `request`
     * portion of the expression is the `operand`.
     *
     * Generated from protobuf field <code>.google.api.expr.v1beta1.Expr operand = 1;</code>
     * @return \Google\Api\Expr\V1beta1\Expr
     */
    public function getOperand()
    {
        return $this->operand;
    }

    /**
     * Required. The target of the selection expression.
     * For example, in the select expression `request.auth`, the `request`
     * portion of the expression is the `operand`.
     *
     * Generated from protobuf field <code>.google.api.expr.v1beta1.Expr operand = 1;</code>
     * @param \Google\Api\Expr\V1beta1\Expr $var
     * @return $this
     */
    public function setOperand($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Expr\V1beta1\Expr::class);
        $this->operand = $var;

        return $this;
    }

    /**
     * Required. The name of the field to select.
     * For example, in the select expression `request.auth`, the `auth` portion
     * of the expression would be the `field`.
     *
     * Generated from protobuf field <code>string field = 2;</code>
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Required. The name of the field to select.
     * For example, in the select expression `request.auth`, the `auth` portion
     * of the expression would be the `field`.
     *
     * Generated from protobuf field <code>string field = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setField($var)
    {
        GPBUtil::checkString($var, True);
        $this->field = $var;

        return $this;
    }

    /**
     * Whether the select is to be interpreted as a field presence test.
     * This results from the macro `has(request.auth)`.
     *
     * Generated from protobuf field <code>bool test_only = 3;</code>
     * @return bool
     */
    public function getTestOnly()
    {
        return $this->test_only;
    }

    /**
     * Whether the select is to be interpreted as a field presence test.
     * This results from the macro `has(request.auth)`.
     *
     * Generated from protobuf field <code>bool test_only = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setTestOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->test_only = $var;

        return $this;
    }

}


