<?php

namespace App\Enums;

class TestTypeEnum
{
    const ACT = 0;  // ACT
    const SATOld = 1;  // SAT (before March 2016)
    const SAT = 9;  // SAT (March 2016 or after)
    const SATSubjectTests = 2;  // SAT Subject Tests
    const APSubjectTests = 3;  // AP Subject Tests
    const IBSubjectTests = 4;  // IB Subject Tests
    const TOEFLiBT = 5;  // TOEFL iBT
    const TOEFLPaper = 6;  // TOEFL Paper
    const PTE = 8;  // PTE Academic Tests
    const IELTS = 7;  // IELTS
    const LeavingExam = 10;  // Senior Secondary Leaving Examination
}
