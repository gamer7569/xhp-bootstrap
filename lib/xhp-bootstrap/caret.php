<?hh
/*
 *  Copyright (c) 2014, Facebook, Inc.
 *  All rights reserved.
 *
 *  This source code is licensed under the BSD-style license found in the
 *  LICENSE file in the root directory of this source tree. An additional grant
 *  of patent rights can be found in the PATENTS file in the same directory.
 *
 */

final class :bootstrap:caret extends :bootstrap:base {

  attribute :span;

  protected function compose(): XHPRoot {
    return <span class="caret" />;
  }

  public static function __example1() {
    return <bootstrap:caret />;
  }
}
